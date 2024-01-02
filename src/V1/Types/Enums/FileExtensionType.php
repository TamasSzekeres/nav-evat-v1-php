<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Fájl kiterjesztés típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FileExtensionType implements EnumContract
{
    use EnumConcern;

    /**
     * PDF fájl típus.
     */
    case PDF;

    /**
     * JPEG fájl típus.
     */
    case JPEG;

    /**
     * PNG fájl típus.
     */
    case PNG;
}
