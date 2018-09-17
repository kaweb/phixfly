<?php

namespace Kaweb\Phixfly\Models;

class AssignedAgentModel
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $externalRef;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * AssignedAgentModel constructor.
     * http://api-docs.fixflo.com/#resources-assignedagent
     *
     * @param string $id
     * @param string $emailAddress
     * @param string $externalRef
     * @param string $displayName
     */
    public function __construct(string $id, string $emailAddress, string $externalRef, string $displayName)
    {
        $this->id = $id;
        $this->emailAddress = $emailAddress;
        $this->externalRef = $externalRef;
        $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getExternalRef(): string
    {
        return $this->externalRef;
    }

    /**
     * @param string $externalRef
     */
    public function setExternalRef(string $externalRef)
    {
        $this->externalRef = $externalRef;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }
}