<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Bevallás feldolgozó rendszer irányítószám típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BevfeldPostalCodeTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 4,
            maxLength: 4,
            pattern: '\d{4}',
        );
    }
}