<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'github' => [
    //'client_id' => env('GITHUB_CLIENT_ID','Iv1.2ca7847a050ff161'),         // Your GitHub Client ID
    //'client_secret' => env('GITHUB_CLIENT_SECRET','a29d78b5838feb06a68002f95b8f6e34f8165674'), // Your GitHub Client Secret
    //'redirect' => 'http://127.0.0.1:8000/login/github/callback',
    'client_id' => env('GITHUB_CLIENT_ID','a0d8aa9dbcd57c881863'),         // Your GitHub Client ID
    'client_secret' => env('GITHUB_CLIENT_SECRET','91520938e335de17d221af867c5a392efaaa4626'), // Your GitHub Client Secret
    'redirect' => 'http://127.0.0.1:8000/login/github/callback',
],

];
