<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\EstateModel;

class EstatesEndpointsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * EstatesEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-estates-add-estate
     *
     * @param EstateModel $contractor
     * @return array
     */
    public function addEstate(EstateModel $contractor)
    {
        return $this->requestHelper->post('/estate', $contractor->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-estates-find-estates
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function findEstates($pg, $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('/estates', [
            'pg' => $pg,
            'keyword' => $keyword,
            'UpdatedSince' => $updatedSince->getTimestamp()
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-estates-get-estate
     *
     * @param int $estateId
     * @param string $externalRef
     * @return array
     */
    public function getEstate($estateId, $externalRef)
    {
        return $this->requestHelper->get('/estate/' . $estateId, [
            'ExternalRef' => $externalRef
        ]);
    }
}