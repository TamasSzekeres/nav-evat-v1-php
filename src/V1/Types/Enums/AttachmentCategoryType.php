<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Csatolmány típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum AttachmentCategoryType implements EnumContract
{
    use EnumConcern;

    /**
     * Faktorálási szerződés.
     */
    case FACTORING_CONTRACT;
}
