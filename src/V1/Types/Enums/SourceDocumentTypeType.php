<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Forrás dokumentum bizonylat típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum SourceDocumentTypeType implements EnumContract
{
    use EnumConcern;

    /**
     * Számla.
     */
    case INVOICE;

    /**
     * Nyugta.
     */
    case RECEIPT;

    /**
     * Vámáru határozat.
     */
    case CUSTOMS_DECLARATION;

    /**
     * Egyéb bizonylat.
     */
    case OTHER;
}
