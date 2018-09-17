<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;

class QuickViewPanelEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * QuickViewPanelEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }
}