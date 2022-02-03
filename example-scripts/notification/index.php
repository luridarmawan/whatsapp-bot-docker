<?php
/**
 * USAGE
 *   curl "http://localhost:8000/" -d '{"cmd": "qrcode", "botName":"CarikBot","phoneNumber":"6287773626568","clientId":911,"data":"1@XzD2Kra1yP/rw3GF4tjufx2c1qN+4ODYJXI3cRzKGXEKukKrEngIYxJgUm7FBddoZWQMQkKcz75STw==,h69n5OBqrGESqtJ3eFCLn1KmuPwNkKEr3HB6YLNDGjc=,5m6sb8=", "ip": "127.0.0.2"}'
 * 
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$json['code'] = 400;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	$json['text'] = 'Invalid method.';
	die(json_encode( $json));
}

$RequestContent = file_get_contents('php://input');
$RequestContentAsJson = [];
if (empty($RequestContent)){
	$json['text'] = 'Invalid content.';
	die(json_encode( $json));
}
$RequestContentAsJson = json_decode($RequestContent, true);
$Command = @$RequestContentAsJson['cmd'];
if (empty($Command)){
	$json['text'] = 'Invalid command.';
	die(json_encode( $json));
}

switch ($Command) {
	case 'qrcode':
    $QRCode = @$RequestContentAsJson['data'];
    if (empty($QRCode)){
      $json['text'] = 'Invalid QR Code.';
      die(json_encode( $json));
    }

    // Your QRCode handler

    $json['text'] = 'QRCode received.';
    die(json_encode( $json));  
		break;

  case 'active':
    $json['text'] = 'OK';
    die(json_encode( $json));
    break;

  case 'exit':
    $json['text'] = 'Exit OK';
    die(json_encode( $json));
    break;

  default:
    $json['text'] = 'Unhandled command: '.$Command;
    die(json_encode( $json));  
		break;
}
