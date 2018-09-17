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
        $reflection = new \ReflectionClass(AdditionalDetailModel::class);
        $protectedProperties = $reflection->getProperties(\ReflectionProperty::IS_PROTECTED);

        $arrayParameters = [];
        foreach ($protectedProperties as $protectedProperty) {
            $protectedProperty->setAccessible(true);
            $arrayParameters[$protectedProperty->getName()] = $protectedProperty->getValue($this);
        }

        return $arrayParameters;
    }
}