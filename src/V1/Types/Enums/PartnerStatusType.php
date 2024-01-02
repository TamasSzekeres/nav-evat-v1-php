<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Partner áfa szerinti státusza.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum PartnerStatusType implements EnumContract
{
    use EnumConcern;

    /**
     * Nem ismert az ügyviteli program számára.
     */
    case NOT_AVAILABLE;

    /**
     * Nem áfaalany, külföldi vagy belföldi természetes személy.
     */
    case PRIVATE_PERSON;

    /**
     * Belföldi áfaalany.
     */
    case DOMESTIC;

    /**
     * Egyéb (belföldi nem áfaalany, nem természetes személy, külföldi áfaalany és külföldi nem áfaalany, nem természetes személy).
     */
    case OTHER;
}
