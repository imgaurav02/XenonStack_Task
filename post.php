<?php
    session_start();
    include "logic.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Post</title>
  </head>
  <body>
  <?php
    include "nav.php";
  ?>

   <?php foreach($query as $q){ ?>
    <div class="jumbotron">
  <h1 class="display-4"><?php echo $q['title']?></h1>
  
  <hr class="my-4">
  <p><?php echo $q['Content']?></p>
  <div class="row d-flex justify-content-center align-items-center">
  <?php if(!empty($_SESSION['name']) and $_SESSION['name']== $q['user']){ ?>
  <a class="btn btn-success btn-lg" href="edit.php?id=<?php echo $q['id']?>" role="button">Edit</a>
  <form method="POST">
    <input type="text" hidden name = id value="<?php echo $q['id']?>">
    <button name="delete" class="btn btn-danger btn-lg mx-2">Delete</button>

  </form>
    <?php }?>
    
  </div>
</div>


   <?php }?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>