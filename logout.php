<?php
session_start();
$_SESSION['login']=="";
$_SESSION['errmsg']="You have successfully logout";

if(session_destroy()) {
	header("Location: index.php");
}
?>