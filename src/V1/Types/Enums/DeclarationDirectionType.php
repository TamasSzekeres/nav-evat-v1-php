<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Importőri vagy közvetett vámjogi képviselői keresés paramétere.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationDirectionType: string
{
    /**
     * Importőr.
     */
    case IMPORTER = 'IMPORTER';

    /**
     * Közvetett vámjogi képviselő.
     */
    case INDIRECT_REPRESENTATIVE = 'INDIRECT_REPRESENTATIVE';
}
