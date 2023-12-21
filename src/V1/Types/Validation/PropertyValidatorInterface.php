<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Validation;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
interface PropertyValidatorInterface
{
    public function validateProperty(string $name, mixed $value): ErrorBag;
}
