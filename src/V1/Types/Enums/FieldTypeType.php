<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Bevallási mező típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FieldTypeType: string
{
    /**
     * Nettó összeg.
     */
    case NET_AMOUNT = 'NET_AMOUNT';

    /**
     * ÁFA összeg.
     */
    case VAT_AMOUNT = 'VAT_AMOUNT';

    /**
     * Mennyiség.
     */
    case QUANTITY = 'QUANTITY';

    /**
     * Egyéb.
     */
    case OTHER = 'OTHER';
}
