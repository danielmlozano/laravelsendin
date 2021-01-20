<?php

namespace Danielmlozano\LaravelSendin;

use GuzzleHttp\Client;
use SendinBlue\Client\Configuration;

class Api
{
    private $config;

    private $http;

    public function __construct()
    {
        $this->config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('laravelsendin.api_key'));
        $this->http = new Client();
    }
}
