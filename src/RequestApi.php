<?php

declare(strict_types=1);

namespace ChurakovMike\EnotIO;

/**
 * Class RequestApi.
 *
 * @property string $host
 * @property \object $http_client
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
     * @var null $http_client
     */
    private $http_client;

    /**
     * RequestApi constructor.
     * @param string $host
     */
    public function __construct(string $host)
    {
        $this->http_client = null;
        $this->host = $host;
    }

    /**
     * @param array $params
     * @param string $method
     */
    public function send(array $params = [], string $method)
    {
        //@todo.
    }
}
