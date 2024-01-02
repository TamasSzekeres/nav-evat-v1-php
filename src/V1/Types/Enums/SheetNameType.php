<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Melléklap neve.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum SheetNameType implements EnumContract
{
    use EnumConcern;

    /**
     * Állatbetegséggel összefüggő járványügyi intézkedés miatti kártalanítás okán fizetési halasztás kérése.
     */
    case VAT_SHEET_2;

    /**
     * A behajthatatlan követelés elszámolásával összefüggő nyilatkozatok.
     */
    case VAT_SHEET_6;

    /**
     * Az Áfa tv. 6/A., 6/B. és a 6/C. számú mellékletei szerint a fordított adózás keretében történt értékesítésre vonatkozó nyilatkozat.
     */
    case VAT_SHEET_7;

    /**
     * Az Áfa tv. 6/A., 6/B. és a 6/C. számú mellékletei szerint a fordított adózás keretében történt beszerzésre vonatkozó nyilatkozat.
     */
    case VAT_SHEET_8;

    /**
     * Az Áfa tv. 4/A. számú melléklet II. pont szerinti adatszolgáltatás a személygépkocsi alvázszámáról.
     */
    case VAT_SHEET_9;

    /**
     * Adatszolgáltatás új közlekedési eszköz értékesítéséről.
     */
    case VAT_SHEET_A88;

    /**
     * Átvezetési és kiutalási kérelem a pénzforgalmat lebonyolító bizonylatokhoz.
     */
    case VAT_SHEET_170;

    /**
     * Önellenőrzési melléklet.
     */
    case VAT_SHEET_4;

    /**
     * Nyilatkozat az önellenőrzés indokáról, ha az adókötelezettséget megállapító jogszabály alaptörvény-ellenes
     * vagy az Európai Unió kötelező jogi aktusába ütközik.
     */
    case VAT_SHEET_EUNY;
}
