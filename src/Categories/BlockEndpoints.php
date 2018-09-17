<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;
use Kaweb\FixfloClient\Models\BlockModel;

class BlockEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * BlockEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-block-add-block
     *
     * @param BlockModel $blockModel
     */
    public function addBlock(BlockModel $blockModel)
    {
        $this->requestHelper->post('/block', [
            'block' => $blockModel
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-block-find-blocks
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     */
    public function findBlocks(int $pg, string $keyword, \DateTime $updatedSince)
    {
        $this->requestHelper->get('/blocks', [
            'pg' => $pg,
            'keyword' => $keyword,
            'UpdatedSince' => $updatedSince
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-block-get-block
     *
     * @param int $blockId
     * @param string $externalBlockRef
     */
    public function getBlock(int $blockId, string $externalBlockRef)
    {
        $this->requestHelper->get('/block/' . $blockId, [
            'ExternalBlockRef' => $externalBlockRef
        ]);
    }
}