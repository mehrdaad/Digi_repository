<?php 
session_start();
if(isset($_POST["exit"]))
{
session_unset();
header("Location: index.php");
die();
}
?>