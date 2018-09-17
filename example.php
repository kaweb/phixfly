<?php

include('vendor/autoload.php');

$Phixfly = \Kaweb\Phixfly\Client::create('yoursubdomain', 'th15154nex4mpl3t0k3n');
$response = $Phixfly->contractorEndpoints()->getContractorServices();

var_dump($response);