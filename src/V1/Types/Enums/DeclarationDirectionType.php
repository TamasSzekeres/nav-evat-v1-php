<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Importőri vagy közvetett vámjogi képviselői keresés paramétere.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationDirectionType implements EnumContract
{
    use EnumConcern;

    /**
     * Importőr.
     */
    case IMPORTER;

    /**
     * Közvetett vámjogi képviselő.
     */
    case INDIRECT_REPRESENTATIVE;
}
