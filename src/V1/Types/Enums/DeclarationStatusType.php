<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Bevallás feldolgozási státusza.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationStatusType implements EnumContract
{
    use EnumConcern;

    /**
     * Befogadva.
     */
    case RECEIVED;

    /**
     * Feldolgozás alatt.
     */
    case PROCESSING;

    /**
     * Bevallás feldolgozási ellenőrzés alatt.
     */
    case BEVFELD_CHECK;

    /**
     * Feldolgozás kész.
     */
    case FINISHED;

    /**
     * Beadva.
     */
    case SUBMITTED;

    /**
     * Kihagyva.
     */
    case ABORTED;
}
