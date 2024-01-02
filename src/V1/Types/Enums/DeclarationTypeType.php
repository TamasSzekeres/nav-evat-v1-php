<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Bevallás típusa típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationTypeType implements EnumContract
{
    use EnumConcern;

    /**
     * Nem értelmezett.
     */
    case NONE;

    /**
     * Felszámolás.
     */
    case ELIMINATION;

    /**
     * Végelszámolás.
     */
    case LIQUIDATION;

    /**
     * Egyéni vállalkozói minőség megszűnése.
     */
    case SELF_EMPLOYMENT_END;

    /**
     * Átalakulás.
     */
    case TRANSFORMATION;

    /**
     * Megszűnés.
     */
    case TERMINATION;

    /**
     * Szünetelés.
     */
    case PAUSING;

    /**
     * Közhatalom megszűnés.
     */
    case STATE_POWER_END;

    /**
     * ÁFA csoportos alanyiság megszűnése.
     */
    case VAT_GROUP_END;

    /**
     * Csoportos adóalany megszűnés.
     */
    case GROUP_TAXPAYER_END;

    /**
     * Általánosan kötelezettből ÁFA mentesre váltás.
     */
    case BECAME_VAT_FREE;

    /**
     * ÁFA mentesből általánosan kötelezettre váltás.
     */
    case BECAME_VAT_OBLIGED;

    /**
     * Beolvadás.
     */
    case FUSION;

    /**
     * Kényszertörlés.
     */
    case FORCED_CANCELLATION;

    /**
     * ÁFA körös adózóvá válás.
     */
    case BECAME_TAXPAYER;

    /**
     * ÁFA körön kívüli adózóra válás.
     */
    case OUT_OF_VAT_CLASS;

}
