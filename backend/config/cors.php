<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://localhost:3000',     // Vue frontend in Docker
        'http://localhost:5173',     // Vue frontend in dev mode
        'http://ecis-solutions:80',  // Vue container name
        'https://ecissolutions.com',  // Production domain
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
