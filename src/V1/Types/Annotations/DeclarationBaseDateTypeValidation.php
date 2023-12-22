<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;
use DateTimeImmutable;
use LightSideSoftware\NavApi\V3\Types\Annotations\DateTimeValidation;

/**
 * Alap bevallási dátum típus.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class DeclarationBaseDateTypeValidation extends DateTimeValidation
{
    public function __construct()
    {
        parent::__construct(minInclusive: new DateTimeImmutable('1970-01-01'));
    }
}
