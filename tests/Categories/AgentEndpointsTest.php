<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\AssignedAgentModelTestTest;

class AgentEndpointsTest
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * AgentEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agent-save-agent
     *
     * @param AssignedAgentModelTestTest $assignedAgent
     * @return array
     */
    public function saveAgent(AssignedAgentModelTestTest $assignedAgent)
    {
        return $this->requestHelper->post('/agent', $assignedAgent->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agent-save-agent
     *
     * @param string $agentId
     * @param string $emailAddress
     * @param string $externalAgentRef
     * @return array
     */
    public function getAgent($agentId, $emailAddress, $externalAgentRef)
    {
        return $this->requestHelper->get('/agent/' . $agentId, [
            'EmailAddress' => $emailAddress,
            'ExternalAgentRef' => $externalAgentRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agent-get-agents
     *
     * @param int $pg
     * @param string $keyword
     * @return array
     */
    public function getAgents($pg, $keyword)
    {
        return $this->requestHelper->get('/agents', [
            'pg' => $pg,
            'Keyword' => $keyword
        ]);
    }
}