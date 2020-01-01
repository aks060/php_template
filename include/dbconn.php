<?php
define("host", 'localhost');
define('dbuser', 'user');
define('dbpass', 'dfgjhdsd');
define('dbname', 'jsgfjdf');
$conn=mysqli_connect(host, dbuser, dbpass, dbname);
if(!$conn)
die('Cannot connect to database');
?>
