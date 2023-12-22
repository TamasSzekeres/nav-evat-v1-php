<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Melléklapon szereplő BEVFELD mező azonosítója.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class SheetFieldNameTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 4,
            maxLength: 13,
            pattern: '[A-Z0-9]{4,13}',
        );
    }
}
