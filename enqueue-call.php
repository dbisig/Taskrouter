<?php

$digit_pressed = $_REQUEST['Digits'];

if ($digit_pressed == '1') {
    $skill = "agilescan";
} else {
    $skill = "vpn";
}

header("Content-Type: application/xml; charset=utf-8");
?>

<Response>
    <Enqueue workflowSid="{WorkflowSid}">
        <Task>{"selected_skills": "<?= $skill ?>"}</Task>
    </Enqueue>
</Response>
