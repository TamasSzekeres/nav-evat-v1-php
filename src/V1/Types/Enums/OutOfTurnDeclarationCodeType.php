<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Soron kívüli bevallás kódja.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum OutOfTurnDeclarationCodeType: string
{
    /**
     * Előtársasági időszak lezárása.
     */
    case PRE_COMPANY_PERIOD_CLOSURE = 'PRE_COMPANY_PERIOD_CLOSURE';

    /**
     * Devizanem váltása.
     */
    case FOREIGN_CURRENCY_CHANGE = 'FOREIGN_CURRENCY_CHANGE';

    /**
     * Egyéb gazdálkodó átalakulása.
     */
    case OTHER_INCORPORATION_CHANGE = 'OTHER_INCORPORATION_CHANGE';

    /**
     * Előtársasági időszakot tartalmazó teljes bevallási időszak.
     */
    case PRE_COMPANY_PERIOD_DECLARATION = 'PRE_COMPANY_PERIOD_DECLARATION';

    /**
     * Adóraktár képviselője által beadott soron kívüli bevallás az ÁFA törvény 89/A.§ szerint.
     */
    case TAX_WAREHOUSE_OUT_OF_TURN_DECLARATION = 'TAX_WAREHOUSE_OUT_OF_TURN_DECLARATION';
}
