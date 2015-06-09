<?php

use Tonis\Asset\Subscriber\BootstrapSubscriber;

return [
    'asset-package' => [
        'root' => realpath(__DIR__ . '/../../../../')
    ],
    'mvc' => [
        'subscribers' => [
            BootstrapSubscriber::class
        ]
    ]
];
