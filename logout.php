<?php
session_start();
session_destroy();
$_SESSION["Email"]=null;
$_SESSION["Uid"]=null;
header("Location:index.php");
?>