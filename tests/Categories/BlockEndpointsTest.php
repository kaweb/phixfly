<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\BlockModel;

class BlockEndpointsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * BlockEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-block-add-block
     *
     * @param BlockModel $blockModel
     * @return array
     */
    public function addBlock(BlockModel $blockModel)
    {
        return $this->requestHelper->post('/block', $blockModel->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-block-find-blocks
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function findBlocks($pg, $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('/blocks', [
            'pg' => $pg,
            'keyword' => $keyword,
            'UpdatedSince' => $updatedSince->getTimestamp()
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-block-get-block
     *
     * @param int $blockId
     * @param string $externalBlockRef
     * @return array
     */
    public function getBlock($blockId, $externalBlockRef)
    {
        return $this->requestHelper->get('/block/' . $blockId, [
            'ExternalBlockRef' => $externalBlockRef
        ]);
    }
}