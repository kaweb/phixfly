<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\LandlordModel;

class LandlordEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * LandlordEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
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
        return $this->requestHelper->post('/landlord', [
            'Landlord' => $landlord
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlord-endpoints-get-landlord
     *
     * @param string $landlordId
     * @param string $emailAddress
     * @param string $externalRef
     * @return array
     */
    public function getLandlord(string $landlordId, string $emailAddress, string $externalRef)
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
    public function getLandlords(int $pg, string $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('landlords', [
            'pg' => $pg,
            'Keyword' => $keyword,
            'UpdatedSince' => $updatedSince
        ]);
    }
}