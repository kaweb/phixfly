<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\TenantModel;

class TenantEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * TenantEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-tenant-add-update-tenant
     *
     * @param TenantModel $tenant
     * @return array
     */
    public function addOrUpdateTenant(TenantModel $tenant)
    {
        return $this->requestHelper->post('/tenant', [
            'tenant' => $tenant->toArray()
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-tenant-find-tenants
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function findTenants($pg, $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('/tenants', [
            'pg' => $pg,
            'keyword' => $keyword,
            'UpdatedSince' => $updatedSince
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-tenant-get-tenant
     *
     * @param string $id
     * @param string $emailAddress
     * @param string $externalRef
     * @return array
     */
    public function getTenant($id, $emailAddress, $externalRef)
    {
        return $this->requestHelper->get('/tenant/' . $id, [
            'EmailAddress' => $emailAddress,
            'ExternalRef' => $externalRef
        ]);
    }
}