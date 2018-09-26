<?php

namespace Kaweb\Phixfly\Helpers;

use \PHPUnit\Framework\TestCase;

class RequestHelperTest extends TestCase
{
    public function requestHelperTest()
    {
        $requestHelper = new RequestHelper('Alex', 'Blackham');

        $requestHelperMock = $this->getMockClass(RequestHelper::class, [
            'request'
        ]);

        $requestHelper->expects($this->once())
            ->method('request')
            ->willReturn(['isOk' => true]);

        $this->assertTrue(is_array($requestHelper->get('a', ['b'])));
    }
}