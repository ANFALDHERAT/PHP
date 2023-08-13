
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .book-detail{
        background:gray ;
        padding:50px;
    }
    </style>
</head>
  <body>
      
<div class="container my-4" >
<header class="d-flex justify-content-between my-4">
        <h1>BOOk details</h1>
        <div><a href="index.php" class="btn btn-primary">back</a></div>
    </header>
    <div class="book-detail">
        <?php
      if( isset($_GET["id"]))
      {
        $id=$_GET["id"];
        include("conect.php");
        $sql="SELECT * FROM books WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array( $result);

       ?>
      <h2>title</h2>
      <p><?php  echo   $row["title"];?></p>
      <h2>description</h2>
      <p><?php  echo   $row["description"];?></p>
      <h2>type</h2>
      <p><?php  echo   $row["type"];?></p>
      <h2>aouther </h2>
      <p><?php  echo   $row["aouther"];?></p>

       <?php
      }
        ?>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>