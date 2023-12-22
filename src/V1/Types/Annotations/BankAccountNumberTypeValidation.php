<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Bankszámla validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BankAccountNumberTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 15,
            maxLength: 34,
            pattern: '([0-9]{8}[-][0-9]{8}[-][0-9]{8}|[0-9]{8}[-][0-9]{8}|[A-Z]{2}[0-9]{2}[0-9A-Za-z]{11,30})',
        );
    }
}
