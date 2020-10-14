<?php

$args = getopt('', array(
    'foo::', 
    'bar::'
));

var_dump($args);
echo "success".PHP_EOL;
