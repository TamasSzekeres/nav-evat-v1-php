<?php /** @noinspection PhpComposerExtensionStubsInspection */

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Serialization;

use DOMText;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;
use StringBackedEnum;

use function array_map;
use function array_merge;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final class EnumHandler implements SubscribingHandlerInterface
{
    /**
     * @return array<int, class-string<StringBackedEnum>>
     */
    public static function supportedTypes(): array
    {
        return [
            DeclarationFrequencyType::class,
            DeclarationKindType::class,
            DeclarationTypeType::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribingMethods(): array
    {
        $supportedTypes = EnumHandler::supportedTypes();

        $serializerMethods = array_map(function (string $enumClass) {
            return [
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => $enumClass,
                'method' => 'serializeStringBackedEnumToXml',
            ];
        }, $supportedTypes);

        $deserializerMethods = array_map(function (string $enumClass) {
            return [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => $enumClass,
                'method' => 'deserializeStringBackedEnumFromXml',
            ];
        }, $supportedTypes);

        return array_merge(
            $serializerMethods,
            $deserializerMethods,
        );
    }

    /**
     * @noinspection PhpUnused
     * @noinspection PhpUnusedParameterInspection
     */
    public function serializeStringBackedEnumToXml(
        XmlSerializationVisitor $visitor,
        $enum,
        array $type,
        Context $context
    ): DOMText {
        return $visitor->visitSimpleString($enum->value, []);
    }

    /**
     * @noinspection PhpUnused
     * @noinspection PhpUnusedParameterInspection
     */
    public function deserializeStringBackedEnumFromXml(
        XmlDeserializationVisitor $visitor,
        $value,
        array $type,
        Context $context
    ) {
        return $type['name']::from((string)$value);
    }
}
