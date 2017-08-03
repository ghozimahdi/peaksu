<!DOCTYPE html>
<html lang="en">
<head>
  <title>Peaksu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="#">Buat Soal</a></li>
      <!-- <li><a href="#">Link</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right" style = "padding-right : 16px">
      <input type="button" name="btn_button" class="btn btn-danger navbar-btn" value="Logout" onclick="location='logout.php'" />
    </ul>
  </div>
</nav>

<div class="container">
  <?php  
    include("dbConnect.php");
    $pertanyaan = $_POST["pertanyaan"];
    $aksara = $_POST["aksara"];
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $jawaban = $_POST["jawaban"];
    if(isset($_POST["simpan"])){
      if(empty($pertanyaan) || empty($aksara) || empty($a) || empty($b) || empty($c) || empty($jawaban)){
          ?>
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
            </div>
          <?php
      }else{
        $sql = "INSERT INTO my_user (username,password) VALUES ('John', 'Doe')";
        if ($con->query($sql) === TRUE) {
          ?>
            <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Indicates a successful or positive action.
            </div>
          <?php
        } else {
          ?>
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error: </strong> <?php echo $sql . "<br>" . $con->error; ?>
            </div>
          <?php

        }
    }
  }
  $con->close();
  ?>

  <h2>Buat Soal</h2>
  <p>Masukan data soal sesuai form</p>

  <form method="post" action="">

    <div class="form-group">
      <label for="pertanyaan">Pertanyaan :</label>
      <textarea class="form-control" rows="5" name="pertanyaan" placeholder="1.apa yang di maksud aksara"></textarea>
    </div>

    <div class="form-group">
      <label for="aksara">Aksara :</label>
      <textarea class="form-control" rows="1" name="aksara" placeholder="tulisan aksara" required=""></textarea>
    </div>


    <div class="form-group">
      <label for="a">A :</label>
      <textarea class="form-control" rows="1" name="a" placeholder="jawaban a"></textarea>
    </div>

    <div class="form-group">
      <label for="b">B :</label>
      <textarea class="form-control" rows="1" name="b" placeholder="jawaban b"></textarea>
    </div>

    <div class="form-group">
      <label for="c">C :</label>
      <textarea class="form-control" rows="1" name="c" placeholder="jawaban c"></textarea>
    </div>

    <div class="form-group">
      <label for="jawaban">Jawaban :</label>
      <textarea class="form-control" rows="1" name="jawaban" placeholder="jawaban soal"></textarea>
    </div>
     <input type = "submit" class="btn btn-primary"  name="simpan" value="Simpan">

  </form>


  </div>
</body>
</html>