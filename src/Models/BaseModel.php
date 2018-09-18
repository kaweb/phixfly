<?php

namespace Kaweb\Phixfly\Models;


class BaseModel
{
    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        try {
            $backtrace = debug_backtrace();

            $reflection = new \ReflectionClass(get_class($backtrace[sizeof(0) - 1]['object']));
            $protectedProperties = $reflection->getProperties(\ReflectionProperty::IS_PROTECTED);

            $objectParameters = [];
            foreach ($protectedProperties as $protectedProperty) {
                $protectedProperty->setAccessible(true);
                $objectParameters[$protectedProperty->getName()] = $protectedProperty->getValue($this);
            }

            return $objectParameters;
        } catch (\ReflectionException $exception) {
            return [];
        }
    }
}