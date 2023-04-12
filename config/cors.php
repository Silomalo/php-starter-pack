<?php

return [

    'paths' => ['api/*', 'api/addUser', '*', 'sanctum/csrf-cookie', '/login', 'otp/*', '/logout'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => ['http://localhost:3000'],

    'allowed_headers' => ['*'],

    'exposed_headers' => ['*'],

    'max_age' => 0,
    'supports_credentials' => true,

];