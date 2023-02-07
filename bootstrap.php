<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container; //instance object

$container->bind('Core\Database', function () {
    $config = require(base_path('config.php'));

    return new Database($config['database']);
});


App::setContainer($container);
