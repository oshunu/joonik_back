<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class AuthApiKey
{
    /*
        Middleware para validar el API_KEY en las solicitudes.
    */
    public function handle(Request $request, Closure $next): Response
    {
        $authorizationHeader = $request->header('Authorization');
        $apiKey = null;
        if ($authorizationHeader && preg_match('/Bearer\s(\S+)/', $authorizationHeader, $matches)) {
            $apiKey = $matches[1];
        }
        if (!$apiKey) {
            return response()->json(['error' => 'Se Requiere una API_KEY'], 401);
        }

        if ($apiKey !== env('APP_API_KEY')) {
            return response()->json(['error' => 'API_KEY Invalida, No autorizado'], 401);
        }
        return $next($request);
    }
}
