<?php

namespace Kaweb\FixfloClient\Models;

class FaultTreeModel
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
    public function __construct(int $faultId, int $faultTreeParent0, int $faultTreeParent1)
    {
        $this->faultId = $faultId;
        $this->faultTreeParent0 = $faultTreeParent0;
        $this->faultTreeParent1 = $faultTreeParent1;
    }
}