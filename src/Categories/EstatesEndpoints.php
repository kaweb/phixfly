<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\EstateModel;

class EstatesEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * EstatesEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
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
        return $this->requestHelper->post('/estate', [
            'contractor' => $contractor
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-estates-find-estates
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function findEstates(int $pg, string $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('estates', [
            'pg' => $pg,
            'keyword' => $keyword,
            'UpdatedSince' => $updatedSince
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-estates-get-estate
     *
     * @param int $estateId
     * @param string $externalRef
     */
    public function getEstate(int $estateId, string $externalRef)
    {
        $this->requestHelper->get('/estate/' . $estateId, [
            'ExternalRef' => $externalRef
        ]);
    }
}