<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\JobModel;

class JobEndpoints
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * JobEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-job-endpoints-get-job
     *
     * @param string $id
     * @return array
     */
    public function getJob($id)
    {
        return $this->requestHelper->get('/job/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-job-endpoints-get-job
     *
     * @param JobModel $job
     * @return array
     */
    public function saveJob(JobModel $job)
    {
        return $this->requestHelper->post('/job/', $job->toArray());
    }
}