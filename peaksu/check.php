<?php
session_start();
$user_check=$_SESSION['username'];

$login_user = $user_check;

if(!isset($user_check)){
	header("Location: index.php");
}
?>