<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Bevallás fajtája típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationKindType implements EnumContract
{
    use EnumConcern;

    /**
     * Nem értelmezett.
     */
    case NONE;

    /**
     * Megelőző időszakra vonatkozó bevallás.
     */
    case PREVIOUS_PERIOD;

    /**
     * Eljárás alatti időszakra vonatkozó bevallás.
     */
    case UNDER_PROCESS;

    /**
     * Eljárást lezáró bevallás.
     */
    case CLOSURE;
}
