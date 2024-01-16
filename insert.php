<?php 
include 'dbcon.php';

if(isset($_GET['msg'])){
  $post_message = $_GET['msg'];
  $message = str_replace("'","\'",$post_message);
  
  $sql = "INSERT INTO test (message) VALUES ('$message')";
  $sql_run = mysqli_query($con, $sql);
}

?>