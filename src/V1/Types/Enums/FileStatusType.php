<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Feltöltött fájl státusz típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FileStatusType implements EnumContract
{
    use EnumConcern;

    /**
     * Aktív státusz.
     */
    case ACTIVE;

    /**
     * Törlésre jelölve.
     */
    case MARKED_FOR_DELETE;

    /**
     * Blokkolt státusz.
     */
    case BLOCKED;
}
