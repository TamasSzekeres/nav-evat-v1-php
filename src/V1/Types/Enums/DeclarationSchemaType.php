<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * A bevallás sémájának típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationSchemaType implements EnumContract
{
    use EnumConcern;

    /**
     * ÁFA bevallás.
     */
    case VAT_DECLARATION;
}
