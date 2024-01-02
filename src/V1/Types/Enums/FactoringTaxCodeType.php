<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Faktorálási szerződéshez kapcsolódó adókód.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FactoringTaxCodeType implements EnumContract
{
    use EnumConcern;

    /**
     * 104-es adónemkód ÁFÁ-hoz.
     */
    case VAT_104;

    /**
     * 215-ös adókód önellenőrzési pótlékhoz.
     */
    case SELF_CHECK_ALLOWANCE_215;
}
