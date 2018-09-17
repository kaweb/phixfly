<?php

namespace Kaweb\Phixfly\Models;

class ContractorServiceModel implements ModelInterface
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
    public function __construct($id, $name, array $nameAndSymptoms)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nameAndSymptoms = $nameAndSymptoms;
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
     * @return array
     */
    public function getNameAndSymptoms()
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

    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        // TODO: Implement toArray() method.
    }
}