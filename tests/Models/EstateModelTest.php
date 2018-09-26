<?php

namespace Kaweb\Phixfly\Models;

class EstateModelTest extends \PHPUnit\Framework\TestCase
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
     * @var AssignedAgentModelTestTest
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
     * @param AssignedAgentModelTestTest $assignedAgent
     * @param \DateTime $updateDate
     */
    public function __construct($id, $name, $externalEstateRef, AssignedAgentModelTestTest $assignedAgent, \DateTime $updateDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->externalEstateRef = $externalEstateRef;
        $this->assignedAgent = $assignedAgent;
        $this->updateDate = $updateDate;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getExternalEstateRef()
    {
        return $this->externalEstateRef;
    }

    /**
     * @param string $externalEstateRef
     */
    public function setExternalEstateRef($externalEstateRef)
    {
        $this->externalEstateRef = $externalEstateRef;
    }

    /**
     * @return AssignedAgentModelTestTest
     */
    public function getAssignedAgent()
    {
        return $this->assignedAgent;
    }

    /**
     * @param AssignedAgentModelTestTest $assignedAgent
     */
    public function setAssignedAgent($assignedAgent)
    {
        $this->assignedAgent = $assignedAgent;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }
}