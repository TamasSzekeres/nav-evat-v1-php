<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Bevallási sor adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DeclarationLineDataType extends BaseType
{
    public function __construct(
        /**
         * @var int Bevallási sor száma.
         */
        #[GenericUnsignedIntegerTypeValidation]
        public int $declarationLineNumber,

        /**
         * @var array<int, DeclarationFieldDataType> Bevallási mező adatok
         */
        #[ArrayValidation(itemType: DeclarationFieldDataType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\DeclarationFieldDataType>')]
        #[XmlList(entry: 'declarationFieldData', inline: true)]
        public array $declarationFieldData,
    ) {
        parent::__construct();
    }
}
