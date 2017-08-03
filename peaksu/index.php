<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="padding-top: 100px">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">
      <div class="panel-heading">
          <h4>Login</h4>
      </div>
      <div class="panel-body">
              <form method="post" action="">
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <button type="submit" name="submit" class="btn btn-success">Login</button>
              </form>
      </div>
    </div>
</div>
</div>

<?php
include("login.php");

if ((isset($_SESSION['username']) != '')) 
{
header('Location: home.php');
}
?>

</body>
</html>
