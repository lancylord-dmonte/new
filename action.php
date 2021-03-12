<html><body>

<?php
 if($isset($_POST['submit']))
 {$to = "lancydmonte@gmail.com";
$sub = $_POST['subject'];
$txt =$_POST['message'];
$headers = $_POST['email'];
 }

echo "done";
 echo $to+$sub+$txt;
?>
  </body></html>
