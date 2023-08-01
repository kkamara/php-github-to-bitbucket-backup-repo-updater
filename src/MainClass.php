<?php

namespace App;

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use stdClass;

class MainClass extends stdClass
{
    protected $http = null;

    public function __construct() {
        $this->http = new Client();
    }

    public function handle() {
        $args = getopt('f:b:', ['foo::', 'bar::',]);

        var_dump($args);
        
        try {
            $this->http->get(
                'https://downloads.slack-edge.com/linux_releases/slack-desktop-4.16.0-amd64.deb',
                ['sink' => realpath(__DIR__.'/../tmp/').'/slack.deb'],
            );

            echo "success".PHP_EOL;
        } catch (RequestException $e) {
            echo print_r($e->getMessage(), true);
            echo print_r($e->getResponse()->getStatusCode(), true);
            echo print_r($e->getResponse()->getBody(), true);
        }
    }
}

(new MainClass())->handle();
