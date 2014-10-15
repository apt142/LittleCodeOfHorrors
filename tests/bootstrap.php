<?php
    // Are we ready?
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new RuntimeException("\nPlease run `composer install` to install dependencies.\n\n");
    }

    // Bootstrap our application with the Composer autoloader
    $loader = require __DIR__ . '/../vendor/autoload.php';
    include_once __DIR__ . '/../lib/ScaryClass.php';

