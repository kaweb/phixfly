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
     * @return array
     */
    public function saveAgent(AssignedAgentModel $assignedAgent)
    {
        return $this->requestHelper->post('/agent', [
            'agent' => $assignedAgent->toArray()
        ]);
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