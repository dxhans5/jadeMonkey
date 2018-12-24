<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Api\General\ClientCredentialsGrant;

class ObtainAuthorizationToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $clientGrant = new ClientCredentialsGrant();
        $token = $clientGrant->obtain_access_token();
        Log::info('token: ' . $token);

        return $next($request);
    }
}
