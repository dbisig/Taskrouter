<?php

$assignment_instruction = [
  'instruction' => 'dequeue',
  'post_work_activity_sid' => '{WA807cc6922ba568c13a6101c74d28c5cc}', //WrapUp
  'from' => '+41435051963' // a verified phone number from your twilio account
];

header('Content-Type: application/json');
echo json_encode($assignment_instruction);
?>
