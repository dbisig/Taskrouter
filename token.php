<?php
include "vendor/autoload.php";
include "./config.php";

use Twilio\Jwt\ClientToken;

$identity = "joey";

$capability = new ClientToken($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
$capability->allowClientIncoming($identity);
$token = $capability->generateToken();

// return serialized token and the user's ID
header('Content-Type: application/json');
echo json_encode(array(
    'identity' => $identity,
    'token' => $token,
));

?>
