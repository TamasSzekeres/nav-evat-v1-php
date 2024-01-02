<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Bevallás gyakoriság típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum DeclarationFrequencyType implements EnumContract
{
    use EnumConcern;

    /**
     * Éves.
     */
    case ANNUAL;

    /**
     * Negyedéves.
     */
    case QUARTERLY;

    /**
     * Havi.
     */
    case MONTHLY;
}
