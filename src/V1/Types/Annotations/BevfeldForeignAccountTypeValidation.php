<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Annotations;

use Attribute;

/**
 * Bevallás feldolgozó rendszer külföldi pénzforgalmi számla típusa.
 *
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class BevfeldForeignAccountTypeValidation extends StringValidation
{
    public function __construct()
    {
        parent::__construct(
            minLength: 1,
            maxLength: 32,
            pattern: '.*[^\s].*',
        );
    }
}
