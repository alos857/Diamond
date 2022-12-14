<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '24656707311-t8lbb60at6umoup3q8hf011hft77tmt2.apps.googleusercontent.com',
        'client_secret' => 'CvIZHsxQRleypI4Fg0HuQBNw',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '871665590334296',
        'client_secret' => '649ee112937ab5c7d13083695c686657',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
];
