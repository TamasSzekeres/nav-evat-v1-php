<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Base;

use ReflectionClass;
use ReflectionProperty;

use function array_combine;
use function array_map;

/**
 * Absztrakt ősosztály minden objektum számára.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class BaseObject
{
    /**
     * @return array<string, mixed> [name => type]
     */
    public function attributes(): array
    {
        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC & ~ReflectionProperty::IS_STATIC);

        return array_map(function (ReflectionProperty $property) {
            return $property->getName();
        }, $properties);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $attributes = $this->attributes();

        $values = array_map(function (string $property) {
            return $this->$property;
        }, $attributes);

        return array_combine($attributes, $values);
    }
}
