<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationDirectionType;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * A POST /queryCustomsDeclarationTaxCode REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryCustomsDeclarationTaxCodeRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var string A vámáru határozat egyedi azonosítója.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $cdpsId,

        /**
         * @var string Határozatszám.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $resolutionId,

        /**
         * @var DeclarationDirectionType Importőri vagy közvetett vámjogi képviselői keresés paramétere.
         */
        public DeclarationDirectionType $declarationDirection,
    ) {
        parent::__construct($header, $user, $software);
    }
}
