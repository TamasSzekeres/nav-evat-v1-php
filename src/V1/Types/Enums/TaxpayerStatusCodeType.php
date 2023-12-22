<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Adózói státusz kódja.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum TaxpayerStatusCodeType: string
{
    /**
     * Közösségi adószámmal rendelkező, áfaalanynak nem minősülő adófizetésre kötelezett jogi személy.
     */
    case CODE_1 = 'CODE_1';

    /**
     * Közösségi adószámmal nem rendelkező, áfaalanynak nem minősülő természetes személy.
     */
    case CODE_3 = 'CODE_3';

    /**
     * Közösségi adószámmal nem rendelkező, áfaalanynak nem minősülő egyéb szervezet.
     */
    case CODE_4 = 'CODE_4';

    /**
     * Közösségi adószámmal nem rendelkező, áfaalanynak nem minősülő jogi személy.
     */
    case CODE_5 = 'CODE_5';
}
