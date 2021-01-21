<?php

namespace Danielmlozano\LaravelSendin;

use GuzzleHttp\Client;
use SendinBlue\Client\Api\AccountApi;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Api\ListsApi;
use SendinBlue\Client\Configuration;

class Api
{
    /**
     * Configuration data
     *
     * @var mixed
     * @access private
     */
    private $config;

    /**
     * Http client
     *
     * @var mixed
     * @access private
     */
    private $http;

    /**
     * Initializes a new LaravelSendin Api Wrapper instance
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('laravelsendin.api_key'));
        $this->http = new Client();
    }

    /**
     * Returns a new AccountApi instance
     *
     * @access public
     * @return SendinBlue\Client\Api\AccountApi
     */
    public function accountApi()
    {
        return new AccountApi($this->http, $this->config);
    }

    /**
     * Returns a new ListsApi instance
     *
     * @access public
     * @return \SendinBlue\Client\Api\ListsApi
     * */
    public function listsApi()
    {
        return new ListsApi($this->http, $this->config);
    }

    public function contactsApi()
    {
        return new ContactsApi(
            $this->http,
            $this->config
        );
    }
}
