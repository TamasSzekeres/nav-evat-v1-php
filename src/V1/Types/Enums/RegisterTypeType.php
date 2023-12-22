<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Enums;

/**
 * Pénztárgépi gyűjtő azonosítója.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
enum RegisterTypeType: string
{
    /**
     * A gyűjtő.
     */
    case A_REGISTER = 'A_REGISTER';

    /**
     * B gyűjtő.
     */
    case B_REGISTER = 'B_REGISTER';

    /**
     * C gyűjtő.
     */
    case C_REGISTER = 'C_REGISTER';

    /**
     * D gyűjtő.
     */
    case D_REGISTER = 'D_REGISTER';

    /**
     * E gyűjtő.
     */
    case E_REGISTER = 'E_REGISTER';
}
