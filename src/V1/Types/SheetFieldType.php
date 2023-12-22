<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use LightSideSoftware\EVat\V1\Types\Annotations\SheetFieldNameTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText512NotBlankTypeValidation;

/**
 * Melléklap mezői.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class SheetFieldType extends BaseType
{
    public function __construct(
        /**
         * @var string A melléklapon szereplő BEVFELD mező azonosítója.
         */
        #[SheetFieldNameTypeValidation]
        public string $sheetFieldName,

        /**
         * @var string A melléklapon szereplő BEVFELD mező értéke.
         */
        #[SimpleText512NotBlankTypeValidation]
        public string $sheetFieldValue,
    ) {
        parent::__construct();
    }
}
