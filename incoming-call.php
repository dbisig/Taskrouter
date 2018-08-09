<?php
header("Content-Type: application/xml; charset=utf-8");
?>

<Response>
        <Say>Welcome to the support center at Infosec Global.</Say>
  <Gather action="enqueue-call.php" numDigits="1" timeout="5">
    <Say>For Agile Scan press one.</Say>
    <Say>For VPN press two.</Say>
  </Gather>
</Response>
