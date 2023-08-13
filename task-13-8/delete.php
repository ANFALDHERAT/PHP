<?php
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    include("conect.php");
    $sql="DELETE FROM books WHERE id=$id";
  if(  $result=mysqli_query($conn,$sql))
  {
    
    // session_start();
    // $_SESSION["delete"]="book delete sucssifly";
    // header("Location:index.php");
  echo "deleted ";
  }
}








?>