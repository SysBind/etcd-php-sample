#!/usr/local/bin/php
<?php

$loader = __DIR__ . '/vendor/autoload.php';

if (!file_exists($loader)) {
    die(
        'You must set up the project dependencies, run the following commands:' . PHP_EOL .
        'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        'php composer.phar install' . PHP_EOL
    );
}

require $loader;


use LinkORB\Component\Etcd\Client;

echo "hello etcd\n";

$client = new Client("example-etcd-cluster:2379");

$client->set('/foo', 'fooValue');

echo "getting previously stored /foo value: \n";

echo $client->get('/foo');

echo "\n going to sleep.. \n press CTRL-C to terminate.";

sleep(12000);

?>
