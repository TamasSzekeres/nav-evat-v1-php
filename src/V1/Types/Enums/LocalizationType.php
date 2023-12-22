<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Lokalizációt jelölő típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum LocalizationType: string
{
    /**
     * Magyar.
     */
    case HU = 'HU';

    /**
     * Angol.
     */
    case EN = 'EN';

    /**
     * Német.
     */
    case DE = 'DE';
}
