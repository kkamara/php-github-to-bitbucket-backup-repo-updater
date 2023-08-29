<?php

namespace App;

require_once(__DIR__.'/../vendor/autoload.php');

use stdClass;

class MainClass extends stdClass
{
    public function __construct() {}

    public function handle() {
        $args = getopt('f:b:', ['foo::', 'bar::',]);

        var_dump($args);
        
        try {

            echo "success".PHP_EOL;
        } catch (RequestException $e) {
            echo print_r($e->getMessage(), true);
        }
    }
}

(new MainClass())->handle();
