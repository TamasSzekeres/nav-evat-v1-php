<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\DeclarationQueryType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationDirectionType;
use LightSideSoftware\NavApi\V3\Types\Annotations\RequestPageTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * A POST /queryCustomsDeclarationDigest REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryCustomsDeclarationDigestRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var int A lekérdezni kívánt lap száma.
         */
        #[RequestPageTypeValidation]
        public int $page,

        /**
         * @var DeclarationDirectionType Importőri vagy közvetett vámjogi képviselői keresés paramétere.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\DeclarationDirectionType'>")]
        public DeclarationDirectionType $declarationDirection,

        /**
         * @var DeclarationQueryType Vámáru határozatok lekérdezési paraméterei.
         */
        public DeclarationQueryType $declarationQueryParams,
    ) {
        parent::__construct($header, $user, $software);
    }
}
