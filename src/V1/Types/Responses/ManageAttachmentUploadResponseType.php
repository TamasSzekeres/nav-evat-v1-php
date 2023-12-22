<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use DateTimeImmutable;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /manageAttachmentUpload REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class ManageAttachmentUploadResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var string A melléklet feltöltésekor kapott azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $claimCheckId,

        /**
         * @var DateTimeImmutable Feltöltési azonosító érvényességének kezdete.
         */
        #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.v\Z'>")]
        public DateTimeImmutable $claimCheckIdValidFrom,

        /**
         * @var DateTimeImmutable Feltöltési azonosító érvényességének vége.
         */
        #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.v\Z'>")]
        public DateTimeImmutable $claimCheckIdValidTo,
    ) {
        parent::__construct($header, $result);
    }
}
