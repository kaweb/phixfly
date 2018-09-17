<?php

namespace Kaweb\Phixfly\Helpers;


class RequestHelper
{
    const FIXFLOW_BASE = ".fixflo.com/api/v2/";

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $token;

    /**
     * RequestHelper constructor.
     * @param string $subdomain
     * @param string $token
     */
    public function __construct($subdomain, $token)
    {
        $this->baseUrl = 'https://' . $subdomain . self::FIXFLOW_BASE;
        $this->token = $token;
    }

    /**
     * Get the JSON data from an endpoint.
     *
     * @param string $endpoint
     * @param array $content
     * @return array
     */
    public function get(string $endpoint, array $content = []) : array
    {
        return $this->request('GET', $endpoint, $content);
    }

    /**
     * POST data to an API endpoint.
     *
     * @param string $endpoint
     * @param array $content
     * @return array
     */
    public function post(string $endpoint, array $content = []) : array
    {
        return $this->request('POST', $endpoint, $content);
    }

    /**
     * Send a DELETE request to an API endpoint.
     *
     * @param string $endpoint
     * @param array $content
     * @return array
     */
    public function delete(string $endpoint, array $content = []) : array
    {
        return $this->request('DELETE', $endpoint, $content);
    }

    /**
     * Send a request based on the given params.
     *
     * @param string $method
     * @param string $endpoint
     * @param array $content
     * @return mixed
     */
    public function request(string $method, string $endpoint, array $content)
    {
        $contentStrings = [];

        foreach ($content as $contentKey => $contentValue) {
            $contentStrings[] = $contentKey . '=' . $contentValue;
        }

        $requestUrl = $this->baseUrl . $endpoint;

        if (substr($endpoint, 0, 1) !== '/') {
            $requestUrl = $endpoint;
        }

        $requestOptions = [
            "http" => [
                "method" => $method,
                "header" => "Authorization: Bearer {$this->token}",
                "content" => http_build_query($contentStrings)
            ]
        ];

        $context = stream_context_create($requestOptions);

        return json_decode(file_get_contents($requestUrl, false, $context), true);
    }
}