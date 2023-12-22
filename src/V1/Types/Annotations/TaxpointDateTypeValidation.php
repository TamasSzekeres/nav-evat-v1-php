<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use DateTimeImmutable;
use LightSideSoftware\NavApi\V3\Types\Annotations\DateTimeValidation;

/**
 * Adózási dátum típus (amely napon az adófizetési kötelezettség és/vagy a levonási jog keletkezett).
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class TaxpointDateTypeValidation extends DateTimeValidation
{
    public function __construct()
    {
        parent::__construct(minInclusive: new DateTimeImmutable('2021-01-01'));
    }
}
