<?php

namespace App;

require_once('vendor/autoload.php');

use GuzzleHttp\Client;

class MainClass
{
    protected $http = null;

    public function __construct() {
        $this->http = new Client();
    }

    public function handle() {
        $args = getopt('f:b:', array(
            'foo::', 
            'bar::'
        ));

        var_dump($args);
        echo "success".PHP_EOL;
    }
}

(new MainClass())->handle();
