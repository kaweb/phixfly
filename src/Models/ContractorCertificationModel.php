<?php

namespace Kaweb\Phixfly\Models;

class ContractorCertificationModel extends BaseModel
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
     * @var \DateTime
     */
    protected $expiry;

    /**
     * ContractorCertificationModel constructor.
     *
     *
     * @param int $id
     * @param string $name
     * @param \DateTime $expiry
     */
    public function __construct($id, $name, \DateTime $expiry)
    {
        $this->id = $id;
        $this->name = $name;
        $this->expiry = $expiry;
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
     * @return \DateTime
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @param \DateTime $expiry
     */
    public function setExpiry(\DateTime $expiry)
    {
        $this->expiry = $expiry;
    }
}