<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Áfa pozíció jelölése.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum PositionTypeType implements EnumContract
{
    use EnumConcern;

    /**
     * Fizetendő áfa.
     */
    case PAYABLE;

    /**
     * Levonható áfa.
     */
    case DEDUCTIBLE;

    /**
     * Egyéb.
     */
    case OTHER;
}
