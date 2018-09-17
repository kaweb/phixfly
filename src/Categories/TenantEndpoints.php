<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;

class TenantEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * TenantEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }
}