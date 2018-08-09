<?php
// Get the Twilio-PHP library from twilio.com/docs/libraries/php,
// following the instructions to install it with Composer.
require_once "vendor/autoload.php";
// Pull in $accountSid, $authToken, $workspaceSid
require_once "api-creds.php";
use Twilio\Rest\Client;

// Set your WorkflowSid
$workflowSid = 'WW045bf2ef5fc0224b77dd57abdb336439';

// instantiate a new Twilio Rest Client
$client = new Client($accountSid, $authToken);

// create a new task

$task = $client->taskrouter
    ->workspaces($workspaceSid)
    ->tasks
    ->create(array(
      'attributes' => '{"selected_skills": "vpn"}',
      'workflowSid' => $workflowSid,
    ));


// display a confirmation message on the screen
echo "Created a new task\n";
?>
