<?php

namespace Kaweb\Phixfly\Models;

class PropertyModel
{
    public function __construct()
    {
        // Look at taking the params and working out whether it is a GET Property they want or a POST Property? *shrug*

        return new PropertyGetModel();
    }
}