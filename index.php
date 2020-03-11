<?php
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
header('Content-Type: text/plain');

$util=new RouterOS\Util($client=new RouterOS\Client('172.25.25.34', 'reyhan', 'reyhan1010'));
$client->sendSync($util->setMenu('/tool user-manager user')->newRequest('add', [
'username' => 'reyhan',
'password' => '123123',
'customer' => 'gontor'
])); 
$client->sendSync($util->setMenu('/tool user-manager user')->newRequest('create-and-activate-profile', [
'numbers' => 'reyhan',
'customer' => 'gontor',
'profile' => 'Staff'
])); 