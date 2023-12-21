<?php /** @noinspection PhpComposerExtensionStubsInspection */

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Serialization;

use DateTimeImmutable;
use DOMText;
use Exception;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final class DateTimeHandler implements SubscribingHandlerInterface
{
    public const DEFAULT_DATETIME_FORMAT = 'Y-m-d H:i:s';

    /**
     * @inheritdoc
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => DateTimeImmutable::class,
                'method' => 'serializeDateTimeImmutableToXml',
            ],
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => DateTimeImmutable::class,
                'method' => 'deserializeDateTimeImmutableFromXml',
            ],
        ];
    }

    /**
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpUnused
     */
    public function serializeDateTimeImmutableToXml(
        XmlSerializationVisitor $visitor,
        DateTimeImmutable $datetime,
        array $type,
        Context $context
    ): DOMText {
        $format = $type['params'][0] ?? self::DEFAULT_DATETIME_FORMAT;
        $formattedDateTime = $datetime->format($format);
        return $visitor->visitSimpleString($formattedDateTime, []);
    }

    /**
     * @noinspection PhpMissingReturnTypeInspection
     * @throws Exception
     */
    public function deserializeDateTimeImmutableFromXml(
        XmlDeserializationVisitor $visitor,
        $value,
        array $type,
        Context $context
    ) {
        $format = $type['params'][0] ?? self::DEFAULT_DATETIME_FORMAT;

        if ($format == 'Y-m-d') {
            $value .= ' 00:00:00';
            $format = 'Y-m-d H:i:s';
        }

        return new DateTimeImmutable((string)$value);
    }
}
