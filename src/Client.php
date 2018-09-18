<?php

namespace Kaweb\Phixfly;

use Kaweb\Phixfly\Categories\AgencyEndpoints;
use Kaweb\Phixfly\Categories\AgentEndpoints;
use Kaweb\Phixfly\Categories\BlockEndpoints;
use Kaweb\Phixfly\Categories\ContractorEndpoints;
use Kaweb\Phixfly\Categories\EstatesEndpoints;
use Kaweb\Phixfly\Categories\IssueDraftEndpoints;
use Kaweb\Phixfly\Categories\IssueEndpoints;
use Kaweb\Phixfly\Categories\JobEndpoints;
use Kaweb\Phixfly\Categories\LandlordEndpoints;
use Kaweb\Phixfly\Categories\LandlordPropertyEndpoints;
use Kaweb\Phixfly\Categories\LeaseholderEndpoints;
use Kaweb\Phixfly\Categories\PropertyEndpoints;
use Kaweb\Phixfly\Categories\QuickViewPanelEndpoints;
use Kaweb\Phixfly\Categories\TenantEndpoints;
use Kaweb\Phixfly\Categories\WebhooksEndpoints;
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