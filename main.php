<?php

use LinkORB\Component\Etcd\Client;

echo "hello etcd\n";

$client = new Client("example-etcd-cluster");

$client->set('/foo', 'fooValue');

echo "getting previously stored /foo value: \n";

echo $client->get('/foo');

?>
