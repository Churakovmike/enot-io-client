<?php

declare(strict_types=1);

namespace ChurakovMike\EnotIO;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Class RequestApi.
 *
 * @property string $host
 * @property Client $http_client
 */
class RequestApi
{
    protected CONST CONNECTION_TIMEOUT = 10;
    protected CONST HTTP_STATUS_CODE = 200;

    /**
     * @var string $host
     */
    private $host;

    /**
     * @var Client $http_client
     */
    private $http_client;

    /**
     * RequestApi constructor.
     * @param string $host
     */
    public function __construct(string $host)
    {
        $this->http_client = new Client([
            'base_uri' => $host,
            'timeout' => static::CONNECTION_TIMEOUT,
        ]);
        $this->host = $host;
    }

    /**
     * @param array $params
     * @param string $path
     * @param string $method
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(array $params = [], string $path, string $method = 'get')
    {
        $request = new Request($method, $path, $params);
        $response = $this->http_client->send($request);
        return $response;
    }
}
