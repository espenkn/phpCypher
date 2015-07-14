<?php


main();

function main()
{
    require('vendor/autoload.php');


    $client = new Everyman\Neo4j\Client('localhost', 7474);
    print_r($client->getServerInfo());



}
?>