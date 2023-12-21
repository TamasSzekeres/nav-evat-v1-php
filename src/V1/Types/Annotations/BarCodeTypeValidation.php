<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

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
            totalDigits: 10,
            pattern: '[0-9]{10}',
        );
    }
}
