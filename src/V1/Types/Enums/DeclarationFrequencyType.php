<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Bevallás gyakoriság típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationFrequencyType: string
{
    /**
     * Éves.
     */
    case ANNUAL = 'ANNUAL';

    /**
     * Negyedéves.
     */
    case QUARTERLY = 'QUARTERLY';

    /**
     * Havi.
     */
    case MONTHLY = 'MONTHLY';
}
