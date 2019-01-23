<?php
session_start();

require 'vendor/autoload.php';

use Carbon\Carbon;

$d = Carbon::now();

echo "carbon test ". $d->addDays(10)  ." <br/><br/>" ;  

$_SESSION["msg"] = "this is a message";


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<form action="process.php" method="post">
<input type="text" name="fullname" id="fullname" value="abdul" />

<input type="submit" value="Process">

</form>

</body>
</html>




