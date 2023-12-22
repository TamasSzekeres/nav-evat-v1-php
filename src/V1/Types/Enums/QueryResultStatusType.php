<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Lekérdezés feldolgozási státusza.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum QueryResultStatusType: string
{
    /**
     * Feldolgozás alatt.
     */
    case PROCESSING = 'PROCESSING';

    /**
     * Feldolgozva.
     */
    case DONE = 'DONE';
}
