<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\DeclarationSummaryType;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\CryptoType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /manageDeclarationSubmission REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class ManageDeclarationSubmissionResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var CryptoType A feltöltött állományra számított hash algoritmus neve és értéke.
         */
        public CryptoType $contentHash,

        /**
         * @var DeclarationSummaryType A bevallás összegző adatai.
         */
        public DeclarationSummaryType $declarationSummary,

        /**
         * @var ?string Az ÁFA analitika alapján összeállított BEVFELD XML adatai.
         */
        #[XmlElement(cdata: false)]
        public ?string $bevfeldData,
    ) {
        parent::__construct($header, $result);
    }
}
