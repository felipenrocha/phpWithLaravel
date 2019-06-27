<?php

namespace App\Api;

class ApiError 
{
public static function errorMessage($message, $code) {
    return [
       ' data' => [
        'erro' => $message,
        'code' =>  $code
        ]
    ];
} 
}