<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use DateTimeImmutable;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /manageDeclarationUpload REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class ManageDeclarationUploadResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var string Feltöltési azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $declarationUploadId,

        /**
         * @var DateTimeImmutable Feltöltési azonosító érvényességének kezdete.
         */
        #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.v\Z'>")]
        public DateTimeImmutable $declarationUploadValidFrom,

        /**
         * @var DateTimeImmutable Feltöltési azonosító érvényességének vége.
         */
        #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.v\Z'>")]
        public DateTimeImmutable $declarationUploadValidTo,

        /**
         * @var ?string Az esetlegesen megszakított korábbi feltöltés azonosítója.
         */
        #[EntityIdTypeValidation]
        #[SkipWhenEmpty]
        #[XmlElement(cdata: false)]
        public ?string $cancelledDeclarationUploadId = null,
    ) {
        parent::__construct($header, $result);
    }
}
