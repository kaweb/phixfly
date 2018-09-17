<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;

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