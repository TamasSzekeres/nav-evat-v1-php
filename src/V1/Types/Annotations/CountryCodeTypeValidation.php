<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Országkód típus ISO 3166 alpha-2 szabvány szerinti validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class CountryCodeTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 2,
            maxLength: 2,
            pattern: '[A-Z]{2}',
        );
    }
}
