<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Bevallás típusa típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationTypeType: string
{
    /**
     * Nem értelmezett.
     */
    case NONE = 'NONE';

    /**
     * Felszámolás.
     */
    case ELIMINATION = 'ELIMINATION';

    /**
     * Végelszámolás.
     */
    case LIQUIDATION = 'LIQUIDATION';

    /**
     * Egyéni vállalkozói minőség megszűnése.
     */
    case SELF_EMPLOYMENT_END = 'SELF_EMPLOYMENT_END';

    /**
     * Átalakulás.
     */
    case TRANSFORMATION = 'TRANSFORMATION';

    /**
     * Megszűnés.
     */
    case TERMINATION = 'TERMINATION';

    /**
     * Szünetelés.
     */
    case PAUSING = 'PAUSING';

    /**
     * Közhatalom megszűnés.
     */
    case STATE_POWER_END = 'STATE_POWER_END';

    /**
     * ÁFA csoportos alanyiság megszűnése.
     */
    case VAT_GROUP_END = 'VAT_GROUP_END';

    /**
     * Csoportos adóalany megszűnés.
     */
    case GROUP_TAXPAYER_END = 'GROUP_TAXPAYER_END';

    /**
     * Általánosan kötelezettből ÁFA mentesre váltás.
     */
    case BECAME_VAT_FREE = 'BECAME_VAT_FREE';

    /**
     * ÁFA mentesből általánosan kötelezettre váltás.
     */
    case BECAME_VAT_OBLIGED = 'BECAME_VAT_OBLIGED';

    /**
     * Beolvadás.
     */
    case FUSION = 'FUSION';

    /**
     * Kényszertörlés.
     */
    case FORCED_CANCELLATION = 'FORCED_CANCELLATION';

    /**
     * ÁFA körös adózóvá válás.
     */
    case BECAME_TAXPAYER = 'BECAME_TAXPAYER';

    /**
     * ÁFA körön kívüli adózóra válás.
     */
    case OUT_OF_VAT_CLASS = 'OUT_OF_VAT_CLASS';

}
