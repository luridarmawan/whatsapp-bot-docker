<?php
/**
 * USAGE
 *   curl -X POST "http://localhost/services/incoming-handler/" -d "phone=msisdn&message=halo"
 */
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
@header("Content-type:application/json");
$json['code'] = 400;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	$json['text'] = 'Invalid method.';
	die(json_encode( $json));
}

extract($_POST);
$phone = @$_POST['phone'];
$message = @$_POST['message'];
if (empty($phone) || empty($message)){
	$json['text'] = 'Invalid parameter.';
	die(json_encode( $json));
}

// Process your message
$output = "echo: $message";


// Response
$json['code'] = 0;
$json['type'] = 'text';
$json['text'] = $output;
$outputJson = json_encode( $json);
echo $outputJson;

