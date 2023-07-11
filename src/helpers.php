<?php

use Firebase\JWT\Key;
use Tungltdev\LARAVEL\JWT\JWT;

if (!function_exists('jwtDecode')) {

    function jwtDecode($jwt, $allowed_alg = 'HS256', $key = null)
    {
        if (empty($key)) {
            $key = config('jwt.secret');
        }
        $keyOrKeyArray = new Key($key, $allowed_alg);
        return JWT::decode($jwt, $keyOrKeyArray);
    }
}
if (!function_exists('jwtEncode')) {

    function jwtEncode($payload, $allowed_alg = 'HS256', $key = null, $keyId = null, $head = null)
    {
        if (empty($key)) {
            $key = config('jwt.secret');
        }
        return JWT::encode($payload, $key, $allowed_alg, $keyId, $head);
    }
}
if (!function_exists('jwtLeeway')) {

    function jwtLeeway($leeway)
    {
        JWT::$leeway = $leeway;
    }
}
