<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Visszautalási döntés.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum ReturnDecisionType implements EnumContract
{
    use EnumConcern;

    /**
     * Nem kér kiutalást.
     */
    case NO_RETURN;

    /**
     * Teljes összeg kiutalása.
     */
    case FULL_RETURN;

    /**
     * Adószámlára átvezetési kérelem.
     */
    case TAX_ACCOUNT_TRANSFER;
}
