<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;

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