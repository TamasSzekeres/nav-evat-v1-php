<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Melléklap oldalainak száma.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class SheetPageCountTypeValidation extends IntegerValidation
{
    public function __construct()
    {
        parent::__construct(
            minInclusive: 1,
            totalDigits: 3,
        );
    }
}
