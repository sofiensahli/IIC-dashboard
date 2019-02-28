<?php

return [



    'driver' => env('MAIL_DRIVER', 'smtp'),



    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),


    'port' => env('MAIL_PORT', 587),


    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'sofien.sahli@esprit.tn'),
        'name' => env('MAIL_FROM_NAME', 'Sofien Sahli'),
    ],



    'encryption' => env('MAIL_ENCRYPTION', 'tls'),



    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),



    'sendmail' => '/usr/sbin/sendmail -bs',



    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],



    'log_channel' => env('MAIL_LOG_CHANNEL'),

];
