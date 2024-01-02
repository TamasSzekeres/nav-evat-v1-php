<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Lokalizációt jelölő típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum LocalizationType implements EnumContract
{
    use EnumConcern;

    /**
     * Magyar.
     */
    case HU;

    /**
     * Angol.
     */
    case EN;

    /**
     * Német.
     */
    case DE;
}
