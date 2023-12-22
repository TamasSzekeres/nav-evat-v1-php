<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * VPID szám.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class VpidTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 12,
            maxLength: 12,
            pattern: '[0-9]{12}',
        );
    }
}
