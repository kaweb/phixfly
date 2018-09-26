<?php

namespace Kaweb\Phixfly\Models;


class BaseModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        try {
            $reflection = new \ReflectionClass($this);
            $protectedProperties = $reflection->getProperties(\ReflectionProperty::IS_PROTECTED);

            $objectParameters = [];
            foreach ($protectedProperties as $protectedProperty) {
                $protectedProperty->setAccessible(true);

                $correctValue = $protectedProperty->getValue($this);

                if (is_object($correctValue)) {
                    if (strpos(get_class($correctValue), 'Model') !== false) {
                        $correctValue = $correctValue->toArray();
                    } else if (get_class($correctValue) === 'DateTime') {
                        $correctValue = $correctValue->getTimestamp();
                    }
                }

                $objectParameters[ucfirst($protectedProperty->getName())] = $correctValue;
            }

            return $objectParameters;
        } catch (\ReflectionException $exception) {
            return [];
        }
    }
}