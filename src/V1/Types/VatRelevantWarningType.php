<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText100NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText512NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;
use LightSideSoftware\NavApi\V3\Types\Enums\BusinessResultCodeType;

/**
 * ÁFA szempontjából releváns figyelmeztetések.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class VatRelevantWarningType extends BaseType
{
    public function __construct(
        /**
         * @var BusinessResultCodeType Validációs eredmény.
         */
        #[Type("Enum<'LightSideSoftware\NavApi\V3\Types\Enums\BusinessResultCodeType'>")]
        public BusinessResultCodeType $validationResultCode,

        /**
         * @var ?string Validációs hibakód.
         */
        #[SimpleText100NotBlankTypeValidation]
        #[SkipWhenEmpty]
        #[XmlElement(cdata: false)]
        public ?string $validationErrorCode = null,

        /**
         * @var ?string Feldolgozási üzenet.
         */
        #[SimpleText512NotBlankTypeValidation]
        #[SkipWhenEmpty]
        #[XmlElement(cdata: false)]
        public ?string $message = null,
    ) {
        parent::__construct();
    }
}
