<?php

namespace App\Http\Controllers\Api\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientCredentialsGrant extends Controller
{
    private $sandbox_url = "https://api.sandbox.ebay.com/identity/v1/oauth2/token";
    private $prod_url = "https://api.ebay.com/identity/v1/oauth2/token";
    private $endpoint_url = null;

    public function __construct() {
        env("APP_ENV") == "development" ? $this->endpoint_url = $this->sandbox_url : $this->endpoint_url = $this->prod_url;
    }

    public function obtain_access_token() {
        return $this->endpoint_url;
    }

    public function refresh_access_token() {

    }
}
