<?php
/**
 * curl 'http://localhost/services/outgoing-queue/'
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$data[] = array(
	'id' => 1,
	'msisdn' => '62.......', <-- target number
	'text' => generateRandomString(30)
);
$data[] = array(
	'id' => 2,
	'msisdn' => '62.......', <-- target number
	'text' => generateRandomString(100)
);

$outputArray['code'] = 1; //0: true
$outputArray['count'] = count($data);
$outputArray['data'] = $data;

header('Content-Type: application/json');
$json = json_encode($outputArray, true);
echo($json);
die();


function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
