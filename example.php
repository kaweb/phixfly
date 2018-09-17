<?php

include('vendor/autoload.php');

$fixfloClient = \Kaweb\FixfloClient\Client::create('inventoryhive', 'th5sOmboOYBI7rcx9VRj22K1tqeDlwowgzhyEqHPPKUADlLjohfBKWMaCCDkVgMz');
$response = $fixfloClient->contractorEndpoints()->getContractorServices();

print_r($response);