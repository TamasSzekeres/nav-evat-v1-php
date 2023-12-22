<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Visszautalási döntés.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum ReturnDecisionType: string
{
    /**
     * Nem kér kiutalást.
     */
    case NO_RETURN = 'NO_RETURN';

    /**
     * Teljes összeg kiutalása.
     */
    case FULL_RETURN = 'FULL_RETURN';

    /**
     * Adószámlára átvezetési kérelem.
     */
    case TAX_ACCOUNT_TRANSFER = 'TAX_ACCOUNT_TRANSFER';
}
