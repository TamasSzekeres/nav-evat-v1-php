<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText1024NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Feldolgozási kurzor adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class PointerType extends BaseType
{
    public function __construct(
        /**
         * @var ?int Analitika sorszáma.
         */
        #[GenericUnsignedIntegerTypeValidation]
        #[SkipWhenEmpty]
        public ?int $lineNumber = null,

        /**
         * @var ?string Tag hivatkozás.
         */
        #[SimpleText1024NotBlankTypeValidation]
        #[SkipWhenEmpty]
        #[XmlElement(cdata: false)]
        public ?string $tag = null,

        /**
         * @var ?string Érték hivatkozás.
         */
        #[SimpleText1024NotBlankTypeValidation]
        #[SkipWhenEmpty]
        #[XmlElement(cdata: false)]
        public ?string $value = null,
    ) {
        parent::__construct();
    }
}
