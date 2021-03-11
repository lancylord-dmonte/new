<html><body>

<?php
$to = "lancydmonte@gmail.com";
$sub = $_POST['subject'];
$txt =$_POST['message'];
$headers = $_POST['email'];

mail($to,$sub,$txt,$headers);
echo "done";
?>
  </body></html>
