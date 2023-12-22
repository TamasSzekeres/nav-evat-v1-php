<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\FileExtensionType;
use LightSideSoftware\EVat\V1\Types\Enums\FileStatusType;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;
use LightSideSoftware\NavApi\V3\Types\CryptoType;

/**
 * Feltöltött melléklet elem.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AttachmentListItemType extends BaseType
{
    public function __construct(
        /**
         * @var string A melléklet feltöltésekor kapott azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $claimCheckId,

        /**
         * @var string A melléklet feltöltésekor kapott azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $fileName,

        /**
         * @var FileExtensionType A feltöltött fájl melléklet kiterjesztése.
         */
        public FileExtensionType $fileExtension,

        /**
         * @var CryptoType A feltöltött állományra számított hash algoritmus neve és értéke.
         */
        public CryptoType $contentHash,

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

        /**
         * @var FileStatusType A feltöltött fájl státusza.
         */
        public FileStatusType $fileStatus,
    ) {
        parent::__construct();
    }
}
