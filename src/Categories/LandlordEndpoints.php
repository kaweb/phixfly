<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\LandlordModel;

class LandlordEndpoints
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * LandlordEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlord-endpoints-save-landlord
     *
     * @param LandlordModel $landlord
     * @return array
     */
    public function saveLandlord(LandlordModel $landlord)
    {
        return $this->requestHelper->post('/landlord', $landlord->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlord-endpoints-get-landlord
     *
     * @param string $landlordId
     * @param string $emailAddress
     * @param string $externalRef
     * @return array
     */
    public function getLandlord($landlordId, $emailAddress, $externalRef)
    {
        return $this->requestHelper->get('/landlord/' . $landlordId, [
            'EmailAddress' => $emailAddress,
            'ExternalRef' => $externalRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlord-endpoints-get-landlords
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function getLandlords($pg, $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('landlords', [
            'pg' => $pg,
            'Keyword' => $keyword,
            'UpdatedSince' => $updatedSince
        ]);
    }
}