<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Forrás dokumentum bizonylat típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum SourceDocumentTypeType: string
{
    /**
     * Számla.
     */
    case INVOICE = 'INVOICE';

    /**
     * Nyugta.
     */
    case RECEIPT = 'RECEIPT';

    /**
     * Vámáru határozat.
     */
    case CUSTOMS_DECLARATION = 'CUSTOMS_DECLARATION';

    /**
     * Egyéb bizonylat.
     */
    case OTHER = 'OTHER';
}
