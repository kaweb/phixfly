<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;
use Kaweb\FixfloClient\Models\AgencyModel;

class AgencyEndpoints
{
    const ENDPOINT_URL = 'https://api.fixflo.com/api/v2';

    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * AgencyEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-get-agencies
     *
     * @param int|string $page
     * @return array
     */
    public function getAgencies($page): array
    {
        return $this->requestHelper->get(self::ENDPOINT_URL . '/agencies', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-add-agency
     *
     * @param AgencyModel $agency
     * @return array
     */
    public function addAgency(AgencyModel $agency): array
    {
        return $this->requestHelper->post(self::ENDPOINT_URL . '/agency', [
            'agency' => $agency
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-get-agency
     *
     * @param string $id
     * @return array
     */
    public function getAgency(string $id): array
    {
        return $this->requestHelper->get(self::ENDPOINT_URL . '/agency/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-delete-agency
     *
     * @param AgencyModel $agency
     * @return array
     */
    public function deleteAgency(AgencyModel $agency): array
    {
        return $this->requestHelper->post(self::ENDPOINT_URL . '/agency/delete', [
            'agency' => $agency
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-restore-agency
     *
     * @param AgencyModel $agency
     * @return array
     */
    public function restoreAgency(AgencyModel $agency): array
    {
        return $this->requestHelper->post(self::ENDPOINT_URL . '/agency/undelete', [
            'agency' => $agency
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-delete-agency-legacy
     *
     * @param AgencyModel $agency
     * @param string $id
     * @return array
     */
    public function deleteAgencyLegacy(AgencyModel $agency, string $id): array
    {
        return $this->requestHelper->delete(self::ENDPOINT_URL . '/agency/' . $id, [
            'agency' => $agency,
            'id' => $id
        ]);
    }
}