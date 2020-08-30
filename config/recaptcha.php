<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Recaptcha keys
    |--------------------------------------------------------------------------
    |
    */
    'key' => [
        'site' => env( 'GOOGLE_RECAPTCHA_KEY', null ),
        'secret' => env( 'GOOGLE_RECAPTCHA_SECRET', null ),

    ]
];
