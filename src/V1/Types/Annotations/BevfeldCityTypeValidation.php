<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Bevallás feldolgozó rendszer város típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BevfeldCityTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 1,
            maxLength: 50,
            pattern: '.*[^\s].*',
        );
    }
}
