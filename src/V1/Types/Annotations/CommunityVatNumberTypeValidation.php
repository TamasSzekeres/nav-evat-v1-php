<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Közösségi adószám validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class CommunityVatNumberTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 4,
            maxLength: 15,
            pattern: '[A-Z]{2}[0-9A-Z]{2,13}',
        );
    }
}
