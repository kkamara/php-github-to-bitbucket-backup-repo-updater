<?php

namespace App;

require_once(__DIR__.'/../vendor/autoload.php');

use Exception;
use stdClass;

class MainClass extends stdClass
{
    protected string $version = "1.0.0";

    protected string $appName = "Github to Bitbucket Backup Repo Updater";

    public function __construct() {}

    public function handle() {        
        try {
            echo "Making bitbucket directory:".
                implode(
                    '/', 
                    [
                        getcwd(), 
                        'bitbucket',
                    ]
                ).PHP_EOL;
            mkdir(implode(
                '/',
                [
                    getcwd(), 
                    'bitbucket',
                ]
            ));
        } catch (Exception $e) {
            echo print_r($e->getMessage(), true);
        }
    }
}

(new MainClass())->handle();
