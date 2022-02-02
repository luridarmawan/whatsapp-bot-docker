<?php
/**
 * USAGE
 *   curl "localhost:8000/" -d '{"botName":"YourBot","phoneNumber":"62112233445566","clientId":1,"code":"1@airMsIMe6ASkRoWnG+2gY1t43MOgmi0nEkAJGf+uIFyud5LMHKXD"}'
 *
 */
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
$json['code'] = 400;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	$json['text'] = 'Invalid method.';
	die(json_encode( $json));
}

$RequestContent = file_get_contents('php://input');
$RequestContentAsJson = json_decode($RequestContent, true);
$BotName = $RequestContentAsJson['botName'];
$PhoneNumber = $RequestContentAsJson['phoneNumber'];
$ClientId = $RequestContentAsJson['clientId'];
$QRCode = $RequestContentAsJson['code'];

if ((empty($QRCode)) or (empty($BotName))){
	$json['text'] = 'Invalid parameters.';
	die(json_encode( $json));
}

// Your code here ..
//
//



// Response
$json['code'] = 0;
$json['text'] = 'OK';
$outputJson = json_encode( $json);
echo $outputJson;

