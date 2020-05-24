<?php

declare(strict_types=1);

namespace ChurakovMike\EnotIO;

/**
 * Class Client.
 *
 * @property RequestApi $request
 */
class Client
{
    protected CONST API_HOST = 'https://enot.io';

    /**
     * @var RequestApi $request
     */
    private $request;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->request = new RequestApi(self::API_HOST);
    }
}
