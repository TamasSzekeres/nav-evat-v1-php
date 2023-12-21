<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Bevallás feldolgozó rendszer háromjegyű szám típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BevfeldThreeDigitNumberTypeValidation extends IntegerValidation
{
    public function __construct()
    {
        parent::__construct(
            minInclusive: 1,
            maxInclusive: 999,
        );
    }
}
