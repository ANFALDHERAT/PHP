<!doctype html>
<html lang="en">
  <head>
    <title>edit book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>edit book</h1>
        <div><a href="index.php" class="btn btn-primary">Back</a></div>
    </header>
    <?php
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        include("conect.php");
        $sql="SELECT * FROM books WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array( $result);
        ?>


<form action="process.php" method="post">
      <div class="form-element my-4">
        <input type="text"  class="form-control" name="title" value="<?php echo $row["title"];?>" placeholder="book title:">
      </div>
      <div class="form-element my-4">
        <input type="text"  class="form-control" name="aouther" value="<?php echo $row["aouther"];?>"    placeholder="Aouther name:">
      </div>
      <div class="form-element my-4">
       <select name="type" class="form-control" >
        <option value="">Select book type</option>
        <option value="Adv" <?php if($row["type"]=="Adv"){echo "selected";}?>>Adv</option>
        <option value="fantacy" <?php if($row["type"]=="fantacy"){echo "selected";}?>>fantacy</option>
        <option value="tlerar" <?php if($row["type"]=="tlerar"){echo "selected";}?>>tlerar</option>
        <option value="scifi" <?php if($row["type"]=="scifi"){echo "selected";}?>>scifi</option>
        
       </select> 
      </div>
      <div class="form-element my-4">
        <input type="text"  class="form-control" name="desc" value="<?php echo $row["description"];?>" placeholder="book description:">
      </div>
      <input type="hidden" name="id" value="<?php echo $row["id"]?>">
 <div class="form-element">

    <input type="submit" class="btn btn-success" name="edit" value="edit book">
 </div>
   </form>



        <?php
    }

    ?>
   
  </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>