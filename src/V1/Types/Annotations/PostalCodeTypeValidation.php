<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Irányítószám típus validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class PostalCodeTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 3,
            maxLength: 10,
            pattern: '[A-Z0-9][A-Z0-9\s\-]{1,8}[A-Z0-9]',
        );
    }
}
