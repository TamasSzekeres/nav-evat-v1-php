<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Az adószám nyolc jegyű törzsszám része validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class TaxPayerIdTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 8,
            maxLength: 8,
            pattern: '[0-9]{8}',
        );
    }
}
