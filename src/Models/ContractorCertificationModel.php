<?php

namespace Kaweb\Phixfly\Models;

class ContractorCertificationModel
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
    public function __construct(int $id, string $name, \DateTime $expiry)
    {
        $this->id = $id;
        $this->name = $name;
        $this->expiry = $expiry;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getExpiry(): \DateTime
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