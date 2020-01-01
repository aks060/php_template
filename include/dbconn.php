<?php
define("HOST", 'localhost');
define('dbuser', 'user');
define('dbpass', 'dfgjhdsd');
define('dbname', 'jsgfjdf');
$conn=mysqli_connect(HOST, dbuser, dbpass, dbname);
if(!$conn)
die('Cannot connect to database');
?>
