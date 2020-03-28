
<?php
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
header('Content-Type: text/plain');

$util = new RouterOS\Util(
	$client = new RouterOS\Client('172.25.25.34', 'reyhan', 'reyhan1010')
);
$activeUsers = $util->setMenu('/ip/hotspot/active')->getAll();
$aktif = $util->setMenu('/ip/dhcp-server/lease')->getAll();

if ($activeUsers['address'] == $aktif['address']) {
	foreach ($activeUsers as $user) {
		echo $user('user');
		foreach ($aktif[$user] as $v) {
			echo $v. "\n";
		}
	}
	
}