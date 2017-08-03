<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
// $id  = $_GET['id'];
 
 require_once('dbConnect.php');
 
// $sql = "SELECT * FROM tanya WHERE id='".$id."'";
 $sql = "SELECT * FROM my_user";

 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
 "username"=>$res['username']
 )
 );
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
 
 }
?>