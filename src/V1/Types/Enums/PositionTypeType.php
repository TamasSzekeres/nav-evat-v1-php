<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Áfa pozíció jelölése.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum PositionTypeType: string
{
    /**
     * Fizetendő áfa.
     */
    case PAYABLE = 'PAYABLE';

    /**
     * Levonható áfa.
     */
    case DEDUCTIBLE = 'DEDUCTIBLE';

    /**
     * Egyéb.
     */
    case OTHER = 'OTHER';
}
