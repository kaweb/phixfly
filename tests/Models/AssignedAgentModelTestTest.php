<?php

namespace Kaweb\Phixfly\Models;

class AssignedAgentModelTestTest extends \PHPUnit\Framework\TestCase
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
    public function __construct($id, $emailAddress, $externalRef, $displayName)
    {
        $this->id = $id;
        $this->emailAddress = $emailAddress;
        $this->externalRef = $externalRef;
        $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getExternalRef()
    {
        return $this->externalRef;
    }

    /**
     * @param string $externalRef
     */
    public function setExternalRef($externalRef)
    {
        $this->externalRef = $externalRef;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
}