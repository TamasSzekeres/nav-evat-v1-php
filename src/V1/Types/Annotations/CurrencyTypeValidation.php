<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Pénznem típus (ISO 4217 szabvány szerinti 3 hosszú pénznem kód) validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class CurrencyTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 3,
            maxLength: 3,
            pattern: '[A-Z]{3}',
        );
    }
}
