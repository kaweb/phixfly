<?php

namespace Kaweb\Phixfly\Models;

class FaultTreeModel implements ModelInterface
{
    /**
     * @var int
     */
    protected $faultId;

    /**
     * @var int
     */
    protected $faultTreeParent0;

    /**
     * @var int
     */
    protected $faultTreeParent1;

    /**
     * FaultTreeModel constructor.
     * http://api-docs.fixflo.com/#resources-faulttree
     *
     * @param int $faultId
     * @param int $faultTreeParent0
     * @param int $faultTreeParent1
     */
    public function __construct($faultId, $faultTreeParent0, $faultTreeParent1)
    {
        $this->faultId = $faultId;
        $this->faultTreeParent0 = $faultTreeParent0;
        $this->faultTreeParent1 = $faultTreeParent1;
    }

    /**
     * @return int
     */
    public function getFaultId()
    {
        return $this->faultId;
    }

    /**
     * @param int $faultId
     */
    public function setFaultId($faultId)
    {
        $this->faultId = $faultId;
    }

    /**
     * @return int
     */
    public function getFaultTreeParent0()
    {
        return $this->faultTreeParent0;
    }

    /**
     * @param int $faultTreeParent0
     */
    public function setFaultTreeParent0($faultTreeParent0)
    {
        $this->faultTreeParent0 = $faultTreeParent0;
    }

    /**
     * @return int
     */
    public function getFaultTreeParent1()
    {
        return $this->faultTreeParent1;
    }

    /**
     * @param int $faultTreeParent1
     */
    public function setFaultTreeParent1($faultTreeParent1)
    {
        $this->faultTreeParent1 = $faultTreeParent1;
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