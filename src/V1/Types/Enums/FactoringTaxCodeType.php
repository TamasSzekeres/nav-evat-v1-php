<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Faktorálási szerződéshez kapcsolódó adókód.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum FactoringTaxCodeType: string
{
    /**
     * 104-es adónemkód ÁFÁ-hoz.
     */
    case VAT_104 = 'VAT_104';

    /**
     * 215-ös adókód önellenőrzési pótlékhoz.
     */
    case SELF_CHECK_ALLOWANCE_215 = 'SELF_CHECK_ALLOWANCE_215';
}
