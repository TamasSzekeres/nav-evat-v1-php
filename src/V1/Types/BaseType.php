<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory;
use LightSideSoftware\EVat\V1\Base\BaseObject;
use LightSideSoftware\EVat\V1\Exceptions\ValidationException;
use LightSideSoftware\EVat\V1\Serialization\DateTimeHandler;
use LightSideSoftware\EVat\V1\Serialization\EnumHandler;
use LightSideSoftware\EVat\V1\Types\Validation\ErrorBag;
use LightSideSoftware\EVat\V1\Types\Validation\PropertyValidatorInterface;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionProperty;

/**
 * XML-transzformációs típusok közös ősosztálya.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class BaseType extends BaseObject
{
    /**
     * @throws ValidationException
     */
    public function __construct()
    {
        $this->validate();
    }

    /**
     * @throws ValidationException
     */
    public function validate(): void
    {
        $validationResult = $this->validateByAttributes();

        if ($validationResult->hasErrors()) {
            throw new ValidationException('Hiba az attribútumok érvényesítése során.', $validationResult);
        }
    }

    protected function validateByAttributes(): ErrorBag
    {
        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC & ~ReflectionProperty::IS_STATIC);

        $errors = new ErrorBag();

        foreach ($properties as $property) {
            $attributes = $property->getAttributes();
            /* @var $attributes ReflectionAttribute */
            foreach ($attributes as $attribute) {
                $instance = $attribute->newInstance();
                $name = $property->getName();
                $value = $property->getValue($this);

                if ($instance instanceof PropertyValidatorInterface) {
                    $errors = $errors->merge($instance->validateProperty($name, $value));
                }
            }
        }

        return $errors;
    }

    /**
     * @throws ValidationException
     */
    public static function fromXml(string $xml): static
    {
        /* @var $object BaseType */
        $object = SerializerBuilder::create()
            ->configureHandlers(function (HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new DateTimeHandler());
                $registry->registerSubscribingHandler(new EnumHandler());
            })
            ->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
            ->build()
            ->deserialize($xml, static::class, 'xml');

        $object->validate();

        return $object;
    }

    public function toXml(bool $indent = false): string
    {
        $serializationVisitorFactory = new XmlSerializationVisitorFactory();

        return SerializerBuilder::create()
            ->configureHandlers(function (HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new DateTimeHandler());
                $registry->registerSubscribingHandler(new EnumHandler());
            })
            ->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
            ->setSerializationVisitor('xml', $serializationVisitorFactory->setFormatOutput($indent))
            ->build()
            ->serialize($this, 'xml');
    }
}
