<?php
$to = "host emailid";
$sub = $_POST['subject'];
$txt =$_POST['message'];
$headers = $_POST['email'];

mail($to,$sub,$txt,$headers);
echo "done";
?>