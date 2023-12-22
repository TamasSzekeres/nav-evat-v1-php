<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\DeclarationDigestType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\ResponsePageTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /queryCustomsDeclarationDigest REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryCustomsDeclarationDigestResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var int A lekérdezés eredménye szerint elérhető utolsó lapszám.
         */
        #[ResponsePageTypeValidation]
        public int $availablePage,

        /**
         * @var int A jelenleg lekérdezett lapszám.
         */
        #[ResponsePageTypeValidation]
        public int $currentPage,

        /**
         * @var array<int, DeclarationDigestType> Vámáru határozat kivonat lekérdezési eredményei.
         */
        #[ArrayValidation(itemType: DeclarationDigestType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\DeclarationDigestType>')]
        #[XmlList(entry: 'declarationDigest', inline: true)]
        public array $declarationDigests = [],
    ) {
        parent::__construct($header, $result);
    }
}
