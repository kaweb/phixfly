<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\LandlordPropertyModel;

class LandlordPropertyEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * LandlordPropertyEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlordproperty-endpoints-save-landlordproperty
     *
     * @param LandlordPropertyModel $landlordProperty
     * @return array
     */
    public function saveLandlordProperty(LandlordPropertyModel $landlordProperty)
    {
        return $this->requestHelper->post('/landlordproperty', $landlordProperty->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlordproperty-endpoints-get-landlordproperty
     *
     * @param int $landlordPropertyId
     * @param string $landlordId
     * @param string $propertyId
     * @return array
     */
    public function getLandlordProperty($landlordPropertyId, $landlordId, $propertyId)
    {
        return $this->requestHelper->get('/landlordproperty/' . $landlordPropertyId, [
            'LandlordId' => $landlordId,
            'PropertyId' => $propertyId
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlordproperty-endpoints-get-landlordproperties
     *
     * @param string $landlordId
     * @param int $pg
     * @return array
     */
    public function getLandlordProperties($landlordId, $pg)
    {
        return $this->requestHelper->get('/landlord/' . $landlordId . '/landlordproperties', [
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-landlordproperty-endpoints-delete-landlordproperty
     *
     * @param LandlordPropertyModel $landlordProperty
     * @return array
     */
    public function deleteLandlordProperty(LandlordPropertyModel $landlordProperty)
    {
        return $this->requestHelper->post('/landlord-property/delete', $landlordProperty->toArray());
    }
}