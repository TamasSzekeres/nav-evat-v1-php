<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Partner áfa szerinti státusza.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum PartnerStatusType: string
{
    /**
     * Nem ismert az ügyviteli program számára.
     */
    case NOT_AVAILABLE = 'NOT_AVAILABLE';

    /**
     * Nem áfaalany, külföldi vagy belföldi természetes személy.
     */
    case PRIVATE_PERSON = 'PRIVATE_PERSON';

    /**
     * Belföldi áfaalany.
     */
    case DOMESTIC = 'DOMESTIC';

    /**
     * Egyéb (belföldi nem áfaalany, nem természetes személy, külföldi áfaalany és külföldi nem áfaalany, nem természetes személy).
     */
    case OTHER = 'OTHER';
}
