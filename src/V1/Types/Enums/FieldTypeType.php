<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Bevallási mező típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FieldTypeType implements EnumContract
{
    use EnumConcern;

    /**
     * Nettó összeg.
     */
    case NET_AMOUNT;

    /**
     * ÁFA összeg.
     */
    case VAT_AMOUNT;

    /**
     * Mennyiség.
     */
    case QUANTITY;

    /**
     * Egyéb.
     */
    case OTHER;
}
