<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * A vámáru határozat típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationOperationType: string
{
    /**
     * Alaphatározat.
     */
    case CREATE = 'CREATE';

    /**
     * Módosító határozat.
     */
    case MODIFY = 'MODIFY';
}
