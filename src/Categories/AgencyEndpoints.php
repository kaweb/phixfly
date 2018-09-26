<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\AgencyModelTestTest;

class AgencyEndpoints
{
    const ENDPOINT_URL = 'https://api.fixflo.com/api/v2';

    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * AgencyEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-get-agencies
     *
     * @param int|string $page
     * @return array
     */
    public function getAgencies($page)
    {
        return $this->requestHelper->get(self::ENDPOINT_URL . '/agencies', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-add-agency
     *
     * @param AgencyModelTestTest $agency
     * @return array
     */
    public function addAgency(AgencyModelTestTest $agency)
    {
        return $this->requestHelper->post(self::ENDPOINT_URL . '/agency', $agency->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-get-agency
     *
     * @param string $id
     * @return array
     */
    public function getAgency($id)
    {
        return $this->requestHelper->get(self::ENDPOINT_URL . '/agency/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-delete-agency
     *
     * @param AgencyModelTestTest $agency
     * @return array
     */
    public function deleteAgency(AgencyModelTestTest $agency)
    {
        return $this->requestHelper->post(self::ENDPOINT_URL . '/agency/delete', $agency->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-restore-agency
     *
     * @param AgencyModelTestTest $agency
     * @return array
     */
    public function restoreAgency(AgencyModelTestTest $agency)
    {
        return $this->requestHelper->post(self::ENDPOINT_URL . '/agency/undelete', $agency->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-agency-delete-agency-legacy
     *
     * @param AgencyModelTestTest $agency
     * @param string $id
     * @return array
     */
    public function deleteAgencyLegacy(AgencyModelTestTest $agency, $id)
    {
        return $this->requestHelper->delete(self::ENDPOINT_URL . '/agency/' . $id, $agency->toArray());
    }
}