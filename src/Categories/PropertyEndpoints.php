<?php

namespace Kaweb\Phixfly\Categories;

use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\PropertyModel;

class PropertyEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * PropertyEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-property-endpoints-post-property
     *
     * @param PropertyModel $property
     * @return array
     */
    public function postProperty(PropertyModel $property)
    {
        return $this->requestHelper->post('/property', [
            'property' => $property
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-property-endpoints-get-propertyaddresses
     *
     * @param int $id
     * @param int $pg
     * @return array
     */
    public function getPropertyAddresses($id, $pg)
    {
        return $this->requestHelper->get('/property/'. $id . '/addresses', [
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-property-endpoints-get-property
     *
     * @param int $id
     * @param string $externalPropertyRef
     * @return array
     */
    public function getProperty($id, $externalPropertyRef)
    {
        return $this->requestHelper->get('/property/' . $id, [
            'ExternalPropertyRef' => $externalPropertyRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-property-endpoints-get-property-tenants
     *
     * @param int $id
     * @return array
     */
    public function getPropertyTenants($id)
    {
        return $this->requestHelper->get('/property/'. $id .'/tenants');
    }


}