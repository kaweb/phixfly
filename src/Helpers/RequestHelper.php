<?php

namespace Kaweb\Phixfly\Helpers;


class RequestHelper
{
    const FIXFLOW_BASE = ".fixflo.com/api/v2";

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
    public function get($endpoint, array $content = [])
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
    public function post($endpoint, array $content = [])
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
    public function delete($endpoint, array $content = [])
    {
        return $this->request('DELETE', $endpoint, $content);
    }

    /**
     * Send a request based on the given params.
     *
     * @param string $method
     * @param string $endpoint
     * @param array $content
     * @return array
     */
    public function request($method, $endpoint, array $content)
    {
        $requestUrl = $this->baseUrl . $endpoint;

        if (substr($endpoint, 0, 1) !== '/') {
            $requestUrl = $endpoint;
        }

        $requestOptions = [
            "http" => [
                "method" => $method,
                "header" => "Authorization: Bearer {$this->token}\r\nContent-Type: application/x-www-form-urlencoded",
                "content" => http_build_query($content)
            ]
        ];

        $context = stream_context_create($requestOptions);
        $contents = file_get_contents($requestUrl, false, $context);
        return json_decode($contents, true);
    }
}