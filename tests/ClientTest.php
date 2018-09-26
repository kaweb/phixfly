<?php

namespace Kaweb\Phixfly\Tests;

use Kaweb\Phixfly\Client;
use \PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function createTest()
    {
        $creation = Client::create('Alex', 'Blackham');

        $this->assertTrue($creation instanceof Client);
    }

    public function checkCredentialsTest()
    {
        $creation = Client::create('Alex', 'Blackham');
    }
}
