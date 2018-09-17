<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;

class WebhooksEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * WebhooksEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }
}