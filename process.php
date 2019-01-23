<?php
session_start();


echo "session value is ".$_SESSION["msg"]."<br/>";

if ( isset($_POST["fullname"] ) )

echo "i am in process.php page  " . $_POST["fullname"] ;

else{

header("location:index.php");

}


?>