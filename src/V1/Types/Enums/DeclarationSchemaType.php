<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * A bevallás sémájának típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationSchemaType: string
{
    /**
     * ÁFA bevallás.
     */
    case VAT_DECLARATION = 'VAT_DECLARATION';
}
