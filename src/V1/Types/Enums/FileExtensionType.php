<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Fájl kiterjesztés típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FileExtensionType: string
{
    /**
     * PDF fájl típus.
     */
    case PDF = 'PDF';

    /**
     * JPEG fájl típus.
     */
    case JPEG = 'JPEG';

    /**
     * PNG fájl típus.
     */
    case PNG = 'PNG';
}
