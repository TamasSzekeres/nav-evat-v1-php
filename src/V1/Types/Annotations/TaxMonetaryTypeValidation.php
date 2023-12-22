<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use LightSideSoftware\NavApi\V3\Types\Annotations\FloatValidation;

/**
 * Adó összeg típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class TaxMonetaryTypeValidation extends FloatValidation
{
    public function __construct()
    {
        parent::__construct(
            totalDigits: 10,
            fractionDigits: 2,
        );
    }
}
