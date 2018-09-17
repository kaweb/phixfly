<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\IssueModel;

class IssueEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * IssueEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-issue
     *
     * @param string $id
     * @return array
     */
    public function getIssue(string $id)
    {
        return $this->requestHelper->get('/issue/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-issue-report
     *
     * @param string $id
     * @return array
     */
    public function getIssueReport(string $id)
    {
        return $this->requestHelper->get('/issue/' . $id . '/report');
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-find-issues
     *
     * @param int $page
     * @param \DateTime $createdSince
     * @param \DateTime $createdBefore
     * @param string $status
     * @param bool $hasExternalPropertyRef
     * @return array
     */
    public function findIssues(int $page, \DateTime $createdSince, \DateTime $createdBefore, string $status, bool $hasExternalPropertyRef)
    {
        return $this->requestHelper->get('/issues', [
            'page' => $page,
            'CreatedSince' => $createdSince,
            'CreatedBefore' => $createdBefore,
            'Status' => $status,
            'HasExternalPropertyRef' => $hasExternalPropertyRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-jobawarded-issues
     *
     * @param int $page
     * @return array
     */
    public function getJobAwardedIssues(int $page)
    {
        return $this->requestHelper->get('/issues/jobawarded', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-jobcompleted-issues
     *
     * @param int $page
     * @return array
     */
    public function getJobCompletedIssues(int $page)
    {
        return $this->requestHelper->get('/issues/jobcompleted', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-closed-issues
     *
     * @param int $page
     * @return array
     */
    public function getClosedIssues(int $page)
    {
        return $this->requestHelper->get('/issues/closed', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-property-issues
     *
     * @param int $id
     * @param int $pg
     * @return array
     */
    public function getPropertyIssues(int $id, int $pg)
    {
        return $this->requestHelper->get('/property/' . $id . '/issues', [
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-saveissue
     *
     * @param IssueModel $issue
     */
    public function saveIssue(IssueModel $issue)
    {
        $this->requestHelper->get('/Issue', [
            'issue' => $issue
        ]);
    }
}