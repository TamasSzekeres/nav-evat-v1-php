<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Bevallás fajtája típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationKindType: string
{
    /**
     * Nem értelmezett.
     */
    case NONE = 'NONE';

    /**
     * Megelőző időszakra vonatkozó bevallás.
     */
    case PREVIOUS_PERIOD = 'PREVIOUS_PERIOD';

    /**
     * Eljárás alatti időszakra vonatkozó bevallás.
     */
    case UNDER_PROCESS = 'UNDER_PROCESS';

    /**
     * Eljárást lezáró bevallás.
     */
    case CLOSURE = 'CLOSURE';
}
