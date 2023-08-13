<?php
include("conect.php");
if(isset($_POST["creat"]))
{
    $title=$_POST["title"];
    $aouther=$_POST["aouther"];
    $type=$_POST["type"];
    $desc=$_POST["desc"];
    $sql="INSERT INTO books(title,aouther,type,description)VALUE('$title','$aouther', '$type', '$desc')";
    if(mysqli_query($conn,$sql))
    {
        // session_start();
        // $_SESSION["creat"]="book aded sucssifly";
        // header("Location:index.php");
        echo "record inserted";
    }else{
        die("some thing will wrong");
    }
}
if(isset($_POST["edit"]))
{
    $title=$_POST["title"];
    $aouther=$_POST["aouther"];
    $type=$_POST["type"];
    $desc=$_POST["desc"];
    $id=$_POST["id"];
    $sql="UPDATE books SET title='$title',aouther='$aouther',type=' $type',description=' $desc'WHERE id=$id";
    if(mysqli_query($conn,$sql))
    {
        
        // session_start();
        // $_SESSION["edit"]="book update sucssifly";
        // header("Location:index.php");

       echo "record updated";
    }else{
        die("some thing will wrong");
    }
}



?>
