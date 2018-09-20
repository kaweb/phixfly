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

        $headers = [
            "Authorization: Bearer {$this->token}",
            "Content-Type: application/x-www-form-urlencoded"
        ];
        $requestOptions = [
            "http" => [
                "method" => $method,
                "header" => implode("\r\n", $headers),
                "content" => http_build_query($content),
                "ignore_errors" => true
            ]
        ];

        $context = stream_context_create($requestOptions);
        $contents = file_get_contents($requestUrl, false, $context);
        $response = json_decode($contents, true);

        $response['success'] = !is_null($response);

        if (!$response['success']) {
            $response['error'] = "Please check your OAuth token and sub domain are correct.";
        }

        return $response;
    }
}