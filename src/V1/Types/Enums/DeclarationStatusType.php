<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Bevallás feldolgozási státusza.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationStatusType: string
{
    /**
     * Befogadva.
     */
    case RECEIVED = 'RECEIVED';

    /**
     * Feldolgozás alatt.
     */
    case PROCESSING = 'PROCESSING';

    /**
     * Bevallás feldolgozási ellenőrzés alatt.
     */
    case BEVFELD_CHECK = 'BEVFELD_CHECK';

    /**
     * Feldolgozás kész.
     */
    case FINISHED = 'FINISHED';

    /**
     * Beadva.
     */
    case SUBMITTED = 'SUBMITTED';

    /**
     * Kihagyva.
     */
    case ABORTED = 'ABORTED';
}
