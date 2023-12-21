<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use DateTimeImmutable;
use JMS\Serializer\Annotation\AnnotationUtilsTrait;
use LightSideSoftware\EVat\V1\Types\Validation\ErrorBag;
use LightSideSoftware\EVat\V1\Types\Validation\PropertyValidatorInterface;

use function get_defined_vars;
use function is_null;

/**
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class DateTimeValidation implements PropertyValidatorInterface
{
    use AnnotationUtilsTrait;

    public function __construct(
        public ?DateTimeImmutable $minExclusive = null,
        public ?DateTimeImmutable $maxExclusive = null,
        public ?DateTimeImmutable $minInclusive = null,
        public ?DateTimeImmutable $maxInclusive = null,
    ) {
        $this->loadAnnotationParameters(get_defined_vars());
    }

    /**
     * @param string $name
     * @param DateTimeImmutable|null $value
     * @return ErrorBag
     */
    public function validateProperty(string $name, mixed $value): ErrorBag
    {
        $errors = new ErrorBag();

        if (is_null($value)) {
            return $errors;
        }

        if (!($value instanceof DateTimeImmutable)) {
            $errors->addError($name, "{$name} tulajdonságnak DataTimeImmutable típusúnak kell lennie!");

            return $errors;
        }

        $timestamp = $value->getTimestamp();

        if ($this->minExclusive && ($timestamp <= $this->minExclusive->getTimestamp())) {
            $formattedMinExclusive = $this->minExclusive->format('Y-m-d H:i:s');
            $errors->addError($name, "{$name} tulajdonságnak nagyobbnak kell lennie mint {$formattedMinExclusive}.");
        }

        if ($this->maxExclusive && ($timestamp >= $this->maxExclusive->getTimestamp())) {
            $formattedMaxExclusive = $this->maxExclusive->format('Y-m-d H:i:s');
            $errors->addError($name, "{$name} tulajdonságnak kisebbnek kell lennie mint {$formattedMaxExclusive}.");
        }

        if ($this->minInclusive && ($timestamp < $this->minInclusive->getTimestamp())) {
            $formattedMinInclusive = $this->minInclusive->format('Y-m-d H:i:s');
            $errors->addError($name, "{$name} tulajdonságnak nagyobbnak vagy egyenlőnek kell lennie mint {$formattedMinInclusive}.");
        }

        if ($this->maxInclusive && ($timestamp > $this->maxInclusive->getTimestamp())) {
            $formattedMaxInclusive = $this->maxInclusive->format('Y-m-d H:i:s');
            $errors->addError($name, "{$name} tulajdonságnak kisebbnek vagy egyenlőnek kell lennie mint {$formattedMaxInclusive}.");
        }

        return $errors;
    }
}
