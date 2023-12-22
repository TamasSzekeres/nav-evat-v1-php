<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Feltöltött fájl státusz típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FileStatusType: string
{
    /**
     * Aktív státusz.
     */
    case ACTIVE = 'ACTIVE';

    /**
     * Törlésre jelölve.
     */
    case MARKED_FOR_DELETE = 'MARKED_FOR_DELETE';

    /**
     * Blokkolt státusz.
     */
    case BLOCKED = 'BLOCKED';
}
