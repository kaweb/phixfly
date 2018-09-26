<?php

namespace Kaweb\Phixfly;

use Kaweb\Phixfly\Categories\AgencyEndpointsTest;
use Kaweb\Phixfly\Categories\AgentEndpointsTest;
use Kaweb\Phixfly\Categories\BlockEndpointsTest;
use Kaweb\Phixfly\Categories\ContractorEndpointsTest;
use Kaweb\Phixfly\Categories\EstatesEndpointsTest;
use Kaweb\Phixfly\Categories\IssueDraftEndpointsTest;
use Kaweb\Phixfly\Categories\IssueEndpointsTest;
use Kaweb\Phixfly\Categories\JobEndpointsTest;
use Kaweb\Phixfly\Categories\LandlordEndpointsTest;
use Kaweb\Phixfly\Categories\LandlordPropertyEndpointsTest;
use Kaweb\Phixfly\Categories\LeaseholderEndpointsTest;
use Kaweb\Phixfly\Categories\PropertyEndpointsTest;
use Kaweb\Phixfly\Categories\QuickViewPanelEndpointsTest;
use Kaweb\Phixfly\Categories\TenantEndpointsTest;
use Kaweb\Phixfly\Categories\WebhooksEndpointsTest;
use Kaweb\Phixfly\Helpers\RequestHelper;

class Client
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * Create a Phixfly
     *
     * @param string $subdomain
     * @param string $authToken
     * @return Client
     */
    public static function create($subdomain, $authToken)
    {
        return new self(new RequestHelper($subdomain, $authToken));
    }

    /**
     * Client constructor.
     *
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * Checks the current credentials and returns true if they're correct.
     *
     * @return bool
     */
    public function checkCredentials()
    {
        $testOne = $this->quickViewPanelEndpoints()->getQuickViewPanel();
        $testTwo = $this->webhooksEndpoints()->listWebhooks();

        return !(array_key_exists('error', $testOne) && array_key_exists('error', $testTwo));
    }

    public function agencyEndpoints()
    {
        return new AgencyEndpointsTest($this->requestHelper);
    }

    public function agentEndpoints()
    {
        return new AgentEndpointsTest($this->requestHelper);
    }

    public function blockEndpoints()
    {
        return new BlockEndpointsTest($this->requestHelper);
    }

    public function contractorEndpoints()
    {
        return new ContractorEndpointsTest($this->requestHelper);
    }

    public function estatesEndpoints()
    {
        return new EstatesEndpointsTest($this->requestHelper);
    }

    public function issueDraftEndpoints()
    {
        return new IssueDraftEndpointsTest($this->requestHelper);
    }

    public function issueEndpoints()
    {
        return new IssueEndpointsTest($this->requestHelper);
    }

    public function jobEndpoints()
    {
        return new JobEndpointsTest($this->requestHelper);
    }

    public function landlordEndpoints()
    {
        return new LandlordEndpointsTest($this->requestHelper);
    }

    public function landlordPropertyEndpoints()
    {
        return new LandlordPropertyEndpointsTest($this->requestHelper);
    }

    public function leaseholderEndpoints()
    {
        return new LeaseholderEndpointsTest($this->requestHelper);
    }

    public function propertyEndpoints()
    {
        return new PropertyEndpointsTest($this->requestHelper);
    }

    public function quickViewPanelEndpoints()
    {
        return new QuickViewPanelEndpointsTest($this->requestHelper);
    }

    public function tenantEndpoints()
    {
        return new TenantEndpointsTest($this->requestHelper);
    }

    public function webhooksEndpoints()
    {
        return new WebhooksEndpointsTest($this->requestHelper);
    }
}