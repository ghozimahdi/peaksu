<?php
session_start();

if(isset($_POST["submit"])){
	if(empty($_POST["username"]) || empty($_POST["pwd"])){
		tampilkanError();
	}else{
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		if($username == "admin" && $password == "admin"){
			$_SESSION['username'] = $username; // Initializing Session
			header("location: home.php"); // Redirecting To Other Page
		}else{
			tampilkanError();
		}
	}
}


function tampilkanError(){
	echo "
<div class='container' style='padding-top: 16px'>
<div class='raw'>
<div class='col-md-4 col-md-offset-4'>
  <div class='alert alert-danger alert-dismissable' name = 'alert'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
    <strong>Fail!</strong> email or password wrong.
</div>
</div>
</div>";
}

?>