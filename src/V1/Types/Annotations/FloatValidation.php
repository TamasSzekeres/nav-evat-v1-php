<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use InvalidArgumentException;
use JMS\Serializer\Annotation\AnnotationUtilsTrait;
use LightSideSoftware\EVat\V1\Types\Validation\ErrorBag;
use LightSideSoftware\EVat\V1\Types\Validation\PropertyValidatorInterface;

use function explode;
use function get_defined_vars;
use function gettype;
use function is_integer;
use function is_null;
use function strlen;
use function strpos;
use function strval;

/**
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class FloatValidation implements PropertyValidatorInterface
{
    use AnnotationUtilsTrait;

    public function __construct(
        public ?float $minExclusive = null,
        public ?float $maxExclusive = null,
        public ?float $minInclusive = null,
        public ?float $maxInclusive = null,
        public ?int $totalDigits = null,
        public ?int $fractionDigits = null,
    ) {
        $this->loadAnnotationParameters(get_defined_vars());

        if (!is_null($this->minExclusive) && $this->maxExclusive && ($this->minExclusive > $this->maxExclusive)) {
            throw new InvalidArgumentException('"minExclusive" paraméter nem lehet nagyobb mint "maxExclusive" paraméter');
        }

        if (!is_null($this->minInclusive) && $this->maxInclusive && ($this->minInclusive > $this->maxInclusive)) {
            throw new InvalidArgumentException('"minInclusive" paraméter nem lehet nagyobb mint "maxInclusive" paraméter');
        }

        if (is_integer($this->totalDigits) && ($this->totalDigits <= 0)) {
            throw new InvalidArgumentException('totalDigits paraméternek 0-nál nagyobbnak kell lennie.');
        }

        if (is_integer($this->fractionDigits) && ($this->fractionDigits <= 0)) {
            throw new InvalidArgumentException('fractionDigits paraméternek 0-nál nagyobbnak kell lennie.');
        }
    }

    public function validateProperty(string $name, mixed $value): ErrorBag
    {
        $errors = new ErrorBag();

        if (!is_null($value) && (gettype($value) !== 'double')) {
            $errors->addError($name, "{$name} tulajdonságnak double típusúnak kell lennie.");
            return $errors;
        }

        if (!is_null($this->minExclusive) && ($value <= $this->minExclusive)) {
            $errors->addError($name, "{$name} tulajdonságnak nagyobbnak kell lennie mint {$this->minExclusive}.");
        }

        if (!is_null($this->maxExclusive) && ($value >= $this->maxExclusive)) {
            $errors->addError($name, "{$name} tulajdonságnak kisebbnek kell lennie mint {$this->maxExclusive}.");
        }

        if (!is_null($this->minInclusive) && ($value < $this->minInclusive)) {
            $errors->addError($name, "{$name} tulajdonságnak nagyobbnak vagy egyenlőnek kell lennie mint {$this->minInclusive}.");
        }

        if (!is_null($this->maxInclusive) && ($value > $this->maxInclusive)) {
            $errors->addError($name, "{$name} tulajdonságnak kisebbnek vagy egyenlőnek kell lennie mint {$this->maxInclusive}.");
        }

        if (
            is_integer($this->totalDigits)
            || is_integer($this->fractionDigits)
        ) {
            $valueAsString = strval($value);

            if (strpos($valueAsString, 'E') > 0) {
                $valueAsString = rtrim(
                    rtrim(
                        number_format(
                            $value,
                            decimals: $this->fractionDigits ?? 20,
                            decimal_separator: '.',
                            thousands_separator: ''
                        ),
                        characters: '0'
                    ),
                    characters: '.'
                );
            }

            $valueParts = explode('.', $valueAsString);
            $digits = $valueParts[0] ?? '0';
            $fraction = $valueParts[1] ?? '';

            if (
                is_integer($this->totalDigits)
                && (strlen($digits) + strlen($fraction) > $this->totalDigits)
            ) {
                $errors->addError($name, "{$name} tulajdonság maximum {$this->totalDigits} számjegyet tartalmazhat.");
            }

            if (
                is_integer($this->fractionDigits)
                && (strlen($fraction) > $this->fractionDigits)
            ) {
                $errors->addError($name, "{$name} tulajdonság maximum {$this->fractionDigits} tizedesjegyet tartalmazhat.");
            }
        }

        return $errors;
    }
}
