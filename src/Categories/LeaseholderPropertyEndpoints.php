<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;
use Kaweb\FixfloClient\Models\LeaseholderPropertyModel;

class LeaseholderPropertyEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * LeaseholderEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
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
        return $this->requestHelper->post('/leaseholderproperty', [
            'LeaseholderProperty' => $leaseholderProperty
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholderproperty-endpoints-get-leaseholderproperty
     *
     * @param int $leaseholderPropertyId
     * @param string $leaseholderId
     * @param int $propertyId
     * @return array
     */
    public function getLeaseholderProperty(int $leaseholderPropertyId, string $leaseholderId, int $propertyId)
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
    public function getLeaseholderProperties(string $leaseholderId, int $pg)
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
        return $this->requestHelper->post('/leaseholderproperty/delete', [
            'LeaseholderProperty' => $leaseholderProperty
        ]);
    }
}