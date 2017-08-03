<?php
include("check.php");
include("dbConnect.php");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Peaksu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="test_style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container {
      padding-top: 70px;
      padding-bottom: 16px
  }
</style>

<nav class="navbar navbar-default affix">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Peaksu</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="buatsoal.php">Buat Soal</a></li>
      <!-- <li><a href="#">Link</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right" style = "padding-right : 16px">
      <input type="button" name="btn_button" class="btn btn-danger navbar-btn" value="Logout" onclick="location='logout.php'" />
    </ul>
  </div>
</nav>


<div class="container">
  <h2>List Soal</h2>
  <p>List soal berserta jawaban dari database mysql</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Pertanyaan</th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>Jawaban</th>
        <th>Aksara</th>
      </tr>
    </thead>
    <tbody>
    <?php

$sql="SELECT username FROM my_user";

if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    ?>
      <tr>
        <td><?php echo $row[0] ?></td>
        <td>Doe</td>
        <td>john@example.com dddddddddddddddddddddddddd ddddddddddddddddddddddd ddddddddddddddddddddddd ddddddddddddddddddddddd dddddddddddddddddddddd d</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com dddddddddddddddddddddddddd ddddddddddddddddddddddd ddddddddddddddddddddddd ddddddddddddddddddddddd dddddddddddddddddddddd d</td>
      </tr>
      <?php
}
  mysqli_free_result($result);
}

mysqli_close($con);
      ?>
    </tbody>
  </table>
</div>

</body>
</html>