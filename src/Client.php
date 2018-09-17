<?php

namespace Kaweb\FixfloClient;

use Kaweb\FixfloClient\Categories\AgencyEndpoints;
use Kaweb\FixfloClient\Categories\AgentEndpoints;
use Kaweb\FixfloClient\Categories\BlockEndpoints;
use Kaweb\FixfloClient\Categories\ContractorEndpoints;
use Kaweb\FixfloClient\Categories\EstatesEndpoints;
use Kaweb\FixfloClient\Categories\IssueDraftEndpoints;
use Kaweb\FixfloClient\Categories\IssueEndpoints;
use Kaweb\FixfloClient\Categories\JobEndpoints;
use Kaweb\FixfloClient\Categories\LandlordEndpoints;
use Kaweb\FixfloClient\Categories\LandlordPropertyEndpoints;
use Kaweb\FixfloClient\Categories\LeaseholderEndpoints;
use Kaweb\FixfloClient\Categories\PropertyEndpoints;
use Kaweb\FixfloClient\Categories\QuickViewPanelEndpoints;
use Kaweb\FixfloClient\Categories\TenantEndpoints;
use Kaweb\FixfloClient\Categories\WebhooksEndpoints;
use Kaweb\FixfloClient\Helpers\RequestHelper;

class Client
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * Create a FixfloClient
     *
     * @param string $subdomain
     * @param string $authToken
     * @return Client
     */
    public static function create(string $subdomain, string $authToken) : Client
    {
        return new self(new RequestHelper($subdomain, $authToken));
    }

    /**
     * Client constructor.
     *
     * @param string $subdomain
     * @param string $authToken
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    public function agencyEndpoints()
    {
        return new AgencyEndpoints($this->requestHelper);
    }

    public function agentEndpoints()
    {
        return new AgentEndpoints($this->requestHelper);
    }

    public function blockEndpoints()
    {
        return new BlockEndpoints($this->requestHelper);
    }

    public function contractorEndpoints()
    {
        return new ContractorEndpoints($this->requestHelper);
    }

    public function estatesEndpoints()
    {
        return new EstatesEndpoints($this->requestHelper);
    }

    public function issueDraftEndpoints()
    {
        return new IssueDraftEndpoints($this->requestHelper);
    }

    public function issueEndpoints()
    {
        return new IssueEndpoints($this->requestHelper);
    }

    public function jobEndpoints()
    {
        return new JobEndpoints($this->requestHelper);
    }

    public function landlordEndpoints()
    {
        return new LandlordEndpoints($this->requestHelper);
    }

    public function landlordPropertyEndpoints()
    {
        return new LandlordPropertyEndpoints($this->requestHelper);
    }

    public function leaseholderEndpoints()
    {
        return new LeaseholderEndpoints($this->requestHelper);
    }

    public function propertyEndpoints()
    {
        return new PropertyEndpoints($this->requestHelper);
    }

    public function quickViewPanelEndpoints()
    {
        return new QuickViewPanelEndpoints($this->requestHelper);
    }

    public function tenantEndpoints()
    {
        return new TenantEndpoints($this->requestHelper);
    }

    public function webhooksEndpoints()
    {
        return new WebhooksEndpoints($this->requestHelper);
    }
}