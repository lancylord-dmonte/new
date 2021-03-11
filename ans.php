<?php

$conn= "mysql:host=localhost;dbname=josho";
$uname="root";
$pass="";

try{
$db= new PDO($conn,$uname,$pass);

echo "Success";

}
catch(PDOException $p)
{
$err_mess=$p->getMessage();
echo $err_mess;
exit();
}


?>