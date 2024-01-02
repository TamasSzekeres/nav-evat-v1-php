<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

use LightSideSoftware\NavApi\V3\Base\EnumConcern;
use LightSideSoftware\NavApi\V3\Base\EnumContract;

/**
 * Pénztárgépi gyűjtő azonosítója.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum RegisterTypeType implements EnumContract
{
    use EnumConcern;

    /**
     * A gyűjtő.
     */
    case A_REGISTER;

    /**
     * B gyűjtő.
     */
    case B_REGISTER;

    /**
     * C gyűjtő.
     */
    case C_REGISTER;

    /**
     * D gyűjtő.
     */
    case D_REGISTER;

    /**
     * E gyűjtő.
     */
    case E_REGISTER;
}
