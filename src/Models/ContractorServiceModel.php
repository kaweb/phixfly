<?php

namespace Kaweb\FixfloClient\Models;

class ContractorServiceModel
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
     * @var string[]
     */
    protected $nameAndSymptoms;

    /**
     * ContractorServiceModel constructor.
     * http://api-docs.fixflo.com/#resources-contractorservice
     *
     * @param int $id
     * @param string $name
     * @param array $nameAndSymptoms
     */
    public function __construct(int $id, string $name, array $nameAndSymptoms)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nameAndSymptoms = $nameAndSymptoms;
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
     * @return array
     */
    public function getNameAndSymptoms(): array
    {
        return $this->nameAndSymptoms;
    }

    /**
     * @param array $nameAndSymptoms
     */
    public function setNameAndSymptoms(array $nameAndSymptoms)
    {
        $this->nameAndSymptoms = $nameAndSymptoms;
    }
}