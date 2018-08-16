<?php
include('./vendor/autoload.php');
include('./api-creds.php');

use Twilio\Twiml;
// the same as: use Twilio\Twiml as Twiml;


$response = new Twiml;

// get the phone number from the page request parameters, if given
if (isset($_REQUEST['To']) && strlen($_REQUEST['To']) > 0) {
    $number = htmlspecialchars($_REQUEST['To']);
    $dial = $response->dial(array('callerId' => $callerId));

    // wrap the phone number or client name in the appropriate TwiML verb
    // by checking if the number given has only digits and format symbols
    if (preg_match("/^[\d\+\-\(\) ]+$/", $number)) {
        $dial->number($number);
    } else {
        $dial->client($number);
    }
} else {
    $response->say("Thanks for calling!");
}

header('Content-Type: text/xml');
echo $response;
?>
