<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use InvalidArgumentException;
use JMS\Serializer\Annotation\AnnotationUtilsTrait;
use LightSideSoftware\EVat\V1\Types\Validation\ErrorBag;
use LightSideSoftware\EVat\V1\Types\Validation\PropertyValidatorInterface;

use function count;
use function get_defined_vars;
use function gettype;
use function is_a;
use function is_array;
use function is_null;
use function strlen;

/**
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ArrayValidation implements PropertyValidatorInterface
{
    use AnnotationUtilsTrait;

    public function __construct(
        public ?int $minItems = null,
        public ?int $maxItems = null,
        public ?string $itemType = null,
        public ?PropertyValidatorInterface $itemValidation = null,
    ) {
        $this->loadAnnotationParameters(get_defined_vars());

        if (
            !is_null($this->minItems)
            && ($this->minItems < 0)
        ) {
            throw new InvalidArgumentException('"minItems" paraméter nem lehet negatív.');
        }

        if (
            !is_null($this->maxItems)
            && ($this->maxItems < 0)
        ) {
            throw new InvalidArgumentException('"maxItems" paraméter nem lehet negatív.');
        }

        if (
            !is_null($this->minItems)
            && !is_null($this->maxItems)
            && ($this->minItems > $this->maxItems)
        ) {
            throw new InvalidArgumentException('"maxItems" paraméter nem lehet kisebb mint "minItems" paraméter.');
        }
    }

    public function validateProperty(string $name, mixed $value): ErrorBag
    {
        $errors = new ErrorBag();

        if (is_null($value)) {
            return $errors;
        }

        if (!is_array($value)) {
            $errors->addError($name, "{$name} tulajdondágnak tömbnek kell lennie.");
            return $errors;
        }

        $itemCount = count($value);

        if ($this->minItems && ($itemCount < $this->minItems)) {
            $errors->addError($name, "{$name} tulajdonságnak legalább {$this->minItems} eleműnek kell lennie.");
        }

        if ($this->maxItems && ($itemCount > $this->maxItems)) {
            $errors->addError($name, "{$name} tulajdonságnak legfeljebb {$this->maxItems} eleműnek kell lennie.");
        }

        if ($this->itemType && (strlen($this->itemType) > 0)) {
            foreach ($value as $index => $item) {
                if (gettype($item) !== $this->itemType
                    && !is_a($item, $this->itemType)) {
                    $errors->addError($name, "{$name} tömb {$index}. elemének {$this->itemType} típusúnak kell lennie.");
                }
            }
        }

        if ($this->itemValidation instanceof PropertyValidatorInterface) {
            $itemErrors = new ErrorBag();
            foreach ($value as $index => $item) {
                $itemErrors = $this->itemValidation->validateProperty("{$name}.{$index}", $item);
            }
            $errors = $errors->merge($itemErrors);
        }

        return $errors;
    }
}
