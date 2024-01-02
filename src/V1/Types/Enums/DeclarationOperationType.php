<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * A vámáru határozat típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationOperationType implements EnumContract
{
    use EnumConcern;

    /**
     * Alaphatározat.
     */
    case CREATE;

    /**
     * Módosító határozat.
     */
    case MODIFY;
}
