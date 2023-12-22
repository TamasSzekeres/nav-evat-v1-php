<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Az ÁFA bevallás adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'declarationInfo',
        'declarationStatements',
        'vatAnalytics',
        'declarationSummary',
        'sheetList',
        'attachments',
    ],
)]
readonly class VatDeclarationDataType extends BaseType
{
    public function __construct(
        /**
         * @var DeclarationInfoType A bevallás fejadatai.
         */
        public DeclarationInfoType $declarationInfo,

        /**
         * @var VatAnalyticsType ÁFA analitika.
         */
        public VatAnalyticsType $vatAnalytics,

        /**
         * @var DeclarationSummaryType A bevallás összegző adatai.
         */
        public DeclarationSummaryType $declarationSummary,

        /**
         * @var ?DeclarationStatementsType Bevallási nyilatkozatok.
         */
        #[SkipWhenEmpty]
        public ?DeclarationStatementsType $declarationStatements = null,

        /**
         * @var ?SheetListType Melléklapok.
         */
        #[SkipWhenEmpty]
        public ?SheetListType $sheetList = null,

        /**
         * @var array<int, AttachmentType> Csatolmányok.
         */
        #[ArrayValidation(itemType: AttachmentType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\AttachmentType>')]
        #[XmlList(entry: 'attachment', inline: true, skipWhenEmpty: true)]
        public array $attachments = [],
    ) {
        parent::__construct();
    }
}
