<?php

include('vendor/autoload.php');

$Phixfly = \Kaweb\Phixfly\Client::create('inventoryhive', 'th5sOmboOYBI7rcx9VRj22K1tqeDlwowgzhyEqHPPKUADlLjohfBKWMaCCDkVgMz');
$response = $Phixfly->contractorEndpoints()->getContractorServices();

print_r($response);