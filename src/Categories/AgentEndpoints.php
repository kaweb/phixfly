<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\AssignedAgentModel;

class AgentEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * AgentEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agent-save-agent
     *
     * @param AssignedAgentModel $assignedAgent
     */
    public function saveAgent(AssignedAgentModel $assignedAgent)
    {
        $this->requestHelper->post('/agent', [
            'agent' => $assignedAgent
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agent-save-agent
     *
     * @param string $agentId
     * @param string $emailAddress
     * @param string $externalAgentRef
     */
    public function getAgent(string $agentId, string $emailAddress, string $externalAgentRef)
    {
        $this->requestHelper->get('/agent/' . $agentId, [
            'EmailAddress' => $emailAddress,
            'ExternalAgentRef' => $externalAgentRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agent-get-agents
     *
     * @param int $pg
     * @param string $keyword
     */
    public function getAgents(int $pg, string $keyword)
    {
        $this->requestHelper->get('/agents', [
            'pg' => $pg,
            'Keyword' => $keyword
        ]);
    }
}