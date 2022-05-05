<?php

namespace Tungltdev\LARAVEL\JWT;

use stdClass;

class JWT extends \Firebase\JWT\JWT
{

    public static function decode(
        string $jwt,
        $keyOrKeyArray
    ): stdClass {
        return parent::decode($jwt, $keyOrKeyArray);
    }

    public static function encode(
        array $payload,
        $key,
        string $alg,
        string $keyId = null,
        array $head = null
    ): string {
        return parent::encode($payload, $key, $alg, $keyId, $head);
    }
}
