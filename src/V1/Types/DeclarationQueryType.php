<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Vámáru határozatok lekérdezési paraméterei.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DeclarationQueryType extends BaseType
{
    public function __construct(
        /**
         * @var MandatoryDeclarationQueryParamsType Vámáru határozat lekérdezés kötelező paraméterei.
         */
        public MandatoryDeclarationQueryParamsType $mandatoryDeclarationQueryParams,

        /**
         * @var ?AdditionalDeclarationQueryParamsType Vámáru határozat lekérdezés kiegészítő paraméterei.
         */
        #[SkipWhenEmpty]
        public ?AdditionalDeclarationQueryParamsType $additionalDeclarationQueryParams = null,
    ) {
        parent::__construct();
    }
}
