<?php
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
header('Content-Type: text/plain');

$util=new RouterOS\Util($client=new RouterOS\Client('xxx.xxx.xxx.xxx', 'username_userman', 'password_userman'));
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
