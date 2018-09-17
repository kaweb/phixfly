<?php

include('vendor/autoload.php');

$Phixfly = \Kaweb\Phixfly\Client::create('yoursubdomain', 'th15154nex4mpl3t0k3n');
$response = $Phixfly->contractorEndpoints()->getContractorServices();

print_r($response);