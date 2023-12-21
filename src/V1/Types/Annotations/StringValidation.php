<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use InvalidArgumentException;
use JMS\Serializer\Annotation\AnnotationUtilsTrait;
use LightSideSoftware\EVat\V1\Types\Validation\ErrorBag;
use LightSideSoftware\EVat\V1\Types\Validation\PropertyValidatorInterface;

use function get_defined_vars;
use function mb_ereg_match;
use function mb_strlen;

/**
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class StringValidation implements PropertyValidatorInterface
{
    use AnnotationUtilsTrait;

    public function __construct(
        public int $minLength,
        public int $maxLength,
        public ?string $pattern = null,
    ) {
        $this->loadAnnotationParameters(get_defined_vars());

        if ($this->minLength < 0) {
            throw new InvalidArgumentException('"minLength" paraméter nem lehet negatív.');
        }

        if ($this->maxLength < 0) {
            throw new InvalidArgumentException('"maxLength" paraméter nem lehet negatív.');
        }

        if ($this->minLength > $this->maxLength) {
            throw new InvalidArgumentException('"maxLength" paraméter nem lehet kisebb mint "minLength" paraméter.');
        }
    }

    public function validateProperty(string $name, mixed $value): ErrorBag
    {
        $errors = new ErrorBag();

        if (is_null($value)) {
            return $errors;
        }

        if (!is_string($value)) {
            $errors->addError($name, "{$name} tulajdondágnak string típusúnak kell lennie.");
            return $errors;
        }

        $length = mb_strlen($value);

        if ($length < $this->minLength) {
            $errors->addError($name, "{$name} tulajdondágnak legalább {$this->minLength} karakter hosszúnak kell lennie.");
        }

        if ($length > $this->maxLength) {
            $errors->addError($name, "{$name} tulajdondágnak legfeljebb {$this->maxLength} karakter hosszúnak kell lennie.");
        }

        if ($this->pattern) {
            if (!mb_ereg_match("^{$this->pattern}$", $value)) {
                $errors->addError($name, "{$name} tulajdonságnak értéke nem illeszkedik a megadott kifjezésre.");
            }
        }

        return $errors;
    }
}
