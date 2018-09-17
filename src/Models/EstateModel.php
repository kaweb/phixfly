<?php

namespace Kaweb\FixfloClient\Models;

class EstateModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $externalEstateRef;

    /**
     * @var AssignedAgentModel
     */
    protected $assignedAgent;

    /**
     * @var \DateTime
     */
    protected $updateDate;

    /**
     * EstateModel constructor.
     * http://api-docs.fixflo.com/#resources-estate
     *
     * @param int $id
     * @param string $name
     * @param string $externalEstateRef
     * @param AssignedAgentModel $assignedAgent
     * @param \DateTime $updateDate
     */
    public function __construct(int $id, string $name, string $externalEstateRef, AssignedAgentModel $assignedAgent, \DateTime $updateDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->externalEstateRef = $externalEstateRef;
        $this->assignedAgent = $assignedAgent;
        $this->updateDate = $updateDate;
    }
}