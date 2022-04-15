<?php

namespace App;

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

use GuzzleHttp\Client;

class MainClass
{
    protected $http = null;

    public function __construct() {
        $this->http = new Client();
    }

    public function handle() {
        $args = getopt('f:b:', ['foo::', 'bar::',]);

        var_dump($args);
        
        $this->http->get(
            'https://downloads.slack-edge.com/linux_releases/slack-desktop-4.16.0-amd64.deb',
            ['sink' => realpath(__DIR__.'/../tmp/').'/slack.deb'],
        );

        echo "success".PHP_EOL;
    }
}

(new MainClass())->handle();
