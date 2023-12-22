<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use LightSideSoftware\NavApi\V3\Types\Annotations\FloatValidation;

/**
 * Hányados típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class TaxRateTypeValidation extends FloatValidation
{
    public function __construct()
    {
        parent::__construct(
            minExclusive: 0.0,
            maxExclusive: 1.0,
            totalDigits: 5,
            fractionDigits: 4,
        );
    }
}
