<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Lekérdezés feldolgozási státusza.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum QueryResultStatusType implements EnumContract
{
    use EnumConcern;

    /**
     * Feldolgozás alatt.
     */
    case PROCESSING;

    /**
     * Feldolgozva.
     */
    case DONE;
}
