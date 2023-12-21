<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Bevallás feldolgozó rendszer 40 hosszú karakterlánc típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BevfeldText40TypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 1,
            maxLength: 40,
            pattern: '.*[^\s].*',
        );
    }
}
