<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use LightSideSoftware\NavApi\V3\Types\Annotations\IntegerValidation;

/**
 * Bárkód típus.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BarCodeTypeValidation extends IntegerValidation
{
    public function __construct()
    {
        parent::__construct(
            minInclusive: 1000000000,
            maxInclusive: 9999999999,
        );
    }
}
