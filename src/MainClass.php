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
            $bitbucketDir = implode(
                '/', 
                [
                    getcwd(), 
                    'bitbucket',
                ]
            );
            echo "Making bitbucket directory: " .
                $bitbucketDir.PHP_EOL;
            $bitbucketDirExists = true === file_exists($bitbucketDir);
            echo "Directory already exists? " . 
                ($bitbucketDirExists ? "true" : "false") .
                PHP_EOL;
            if ($bitbucketDirExists) {
                throw new Exception(
                    "The bitbucket folder already exists in current directory." .
                    PHP_EOL
                );
            }
            mkdir($bitbucketDir);

            echo "Created directory: $bitbucketDir" .
                PHP_EOL;
        } catch (Exception $e) {
            echo print_r($e->getMessage(), true);
        }
    }
}

(new MainClass())->handle();
