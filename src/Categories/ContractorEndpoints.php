<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\ContractorModel;

class ContractorEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * ContractorEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-contractor-add-contractor
     *
     * @param ContractorModel $contractor
     * @return array
     */
    public function addContractor(ContractorModel $contractor)
    {
        return $this->requestHelper->post('/contractor', [
            'contrator' => $contractor->toArray()
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-contractor-find-contractors
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function findContractors($pg, $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('/contractors', [
            'pg' => $pg,
            'keyword' => $keyword,
            'UpdatedSince' => $updatedSince->getTimestamp()
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-contractor-get-contractor
     *
     * @param string $contractorId
     * @param string $emailAddress
     * @param string $externalRef
     * @return array
     */
    public function getContractor($contractorId, $emailAddress, $externalRef)
    {
        return $this->requestHelper->get('/contractor/' . $contractorId, [
            'EmailAddress' => $emailAddress,
            'ExternalRef' => $externalRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-contractor-get-contractor-services
     *
     * @return array
     */
    public function getContractorServices()
    {
        return $this->requestHelper->get('/contractor/services');
    }
}