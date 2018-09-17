<?php

namespace Kaweb\Phixfly\Models;


class BaseModel
{
    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     * @throws \ReflectionException
     */
    function toArray()
    {
        $reflection = new \ReflectionClass($this);
        $protectedProperties = $reflection->getProperties(\ReflectionProperty::IS_PROTECTED);

        $arrayParameters = [];
        foreach ($protectedProperties as $protectedProperty) {
            $toReturn[$protectedProperty->getName()] = $protectedProperty->getValue();
        }

        print_r($protectedProperties);
        return $arrayParameters;
    }
}