<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\LeaseholderPropertyModel;

class LeaseholderPropertyEndpointsTest
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * LeaseholderEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholderproperty-endpoints-save-leaseholderproperty
     *
     * @param LeaseholderPropertyModel $leaseholderProperty
     * @return array
     */
    public function saveLeaseholderProperty(LeaseholderPropertyModel $leaseholderProperty)
    {
        return $this->requestHelper->post('/leaseholderproperty', $leaseholderProperty->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholderproperty-endpoints-get-leaseholderproperty
     *
     * @param int $leaseholderPropertyId
     * @param string $leaseholderId
     * @param int $propertyId
     * @return array
     */
    public function getLeaseholderProperty($leaseholderPropertyId, $leaseholderId, $propertyId)
    {
        return $this->requestHelper->get('/leaseholderproperty/' . $leaseholderPropertyId, [
            'LeaseholderId' => $leaseholderId,
            'PropertyId' => $propertyId
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholderproperty-endpoints-get-leaseholderproperties
     *
     * @param string $leaseholderId
     * @param int $pg
     * @return array
     */
    public function getLeaseholderProperties($leaseholderId, $pg)
    {
        return $this->requestHelper->get('/leaseholder/'. $leaseholderId .'/leaseholderproperties', [
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholderproperty-endpoints-delete-leaseholderproperty
     *
     * @param LeaseholderPropertyModel $leaseholderProperty
     * @return array
     */
    public function deleteLeaseholderProperty(LeaseholderPropertyModel $leaseholderProperty)
    {
        return $this->requestHelper->post('/leaseholderproperty/delete', $leaseholderProperty->toArray());
    }
}