<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Csatolmány típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum AttachmentCategoryType: string
{
    /**
     * Faktorálási szerződés.
     */
    case FACTORING_CONTRACT = 'FACTORING_CONTRACT';
}
