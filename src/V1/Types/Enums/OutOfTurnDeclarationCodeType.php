<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Soron kívüli bevallás kódja.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum OutOfTurnDeclarationCodeType implements EnumContract
{
    use EnumConcern;

    /**
     * Előtársasági időszak lezárása.
     */
    case PRE_COMPANY_PERIOD_CLOSURE;

    /**
     * Devizanem váltása.
     */
    case FOREIGN_CURRENCY_CHANGE;

    /**
     * Egyéb gazdálkodó átalakulása.
     */
    case OTHER_INCORPORATION_CHANGE;

    /**
     * Előtársasági időszakot tartalmazó teljes bevallási időszak.
     */
    case PRE_COMPANY_PERIOD_DECLARATION;

    /**
     * Adóraktár képviselője által beadott soron kívüli bevallás az ÁFA törvény 89/A.§ szerint.
     */
    case TAX_WAREHOUSE_OUT_OF_TURN_DECLARATION;
}
