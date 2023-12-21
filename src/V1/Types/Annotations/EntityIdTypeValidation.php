<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Generált azonosító típus validálására szolgáló annotáció.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class EntityIdTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 1,
            maxLength: 30,
            pattern: '[+a-zA-Z0-9_]{1,30}',
        );
    }
}
