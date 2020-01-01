<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/dbconn.php');
session_start();
$login=0;
if(isset($_SESSION['user']) && isset($_SESSION['user']['status']) && $_SESSION['user']['status']===1)
$login=1;
else
$login=0;
?>
