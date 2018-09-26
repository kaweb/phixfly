<?php

namespace Kaweb\Phixfly\Tests;

use Kaweb\Phixfly\Helpers\RequestHelper;
use PHPUnit\Framework\TestCase;
use Kaweb\Phixfly\Client;

class ClientTest extends TestCase
{
    public function testClient()
    {
        $requestHelperMock = $this->getMockBuilder(RequestHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        $client = new Client($requestHelperMock);

        $this->assertTrue($client instanceof Client);

        // TODO: Alter the client to not return the new keyword thus making it more testable.
//        $this->assertTrue($client->agencyEndpoints() instanceof AgencyEndpoints);
//        $this->assertTrue($client->agentEndpoints() instanceof AgentEndpoints);
//        $this->assertTrue($client->blockEndpoints() instanceof BlockEndpoints);
//        $this->assertTrue($client->contractorEndpoints() instanceof ContractorEndpoints);
//        $this->assertTrue($client->estatesEndpoints() instanceof EstatesEndpoints);
//        $this->assertTrue($client->issueDraftEndpoints() instanceof IssueDraftEndpoints);
//        $this->assertTrue($client->issueEndpoints() instanceof IssueEndpoints);
//        $this->assertTrue($client->jobEndpoints() instanceof JobEndpoints);
//        $this->assertTrue($client->landlordEndpoints() instanceof LandlordEndpoints);
//        $this->assertTrue($client->landlordPropertyEndpoints() instanceof LandlordPropertyEndpoints);
//        $this->assertTrue($client->leaseholderEndpoints() instanceof LeaseholderEndpoints);
//        $this->assertTrue($client->propertyEndpoints() instanceof PropertyEndpoints);
//        $this->assertTrue($client->quickViewPanelEndpoints() instanceof QuickViewPanelEndpoints);
//        $this->assertTrue($client->tenantEndpoints() instanceof TenantEndpoints);
//        $this->assertTrue($client->webhooksEndpoints() instanceof WebhooksEndpoints);
    }
}
