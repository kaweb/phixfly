<?php

namespace Kaweb\Phixfly\Models;


interface ModelInterface
{
    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray();
}