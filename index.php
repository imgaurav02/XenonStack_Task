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

    <title>Gaurav Blog</title>
  </head>
  <body>
  <?php
    include "nav.php";
  ?>

  <?php
  if(isset($_REQUEST["info"])){ ?>
  <?php if($_REQUEST["info"]=='added'){ ?>
  <div class="alert alert-success" role="alert">
    post has been added succesfully
  </div>

  <?php }  else if($_REQUEST["info"]=='updated'){?>
  <div class="alert alert-success" role="alert">
    post has been Updated succesfully
  </div>
  <?php } else if($_REQUEST["info"]=='deleted'){?>

    <div class="alert alert-danger" role="alert">
    post has been Deleted succesfully
  </div>
  <?php } else if($_REQUEST["info"]=='signup'){?>
    <div class="alert alert-success" role="alert">
    Account Created succesfully

  <?php } else if($_REQUEST["info"]=='login'){?>

    <div class="alert alert-success" role="alert">
    Logged In succesfully
  <?php } else if($_REQUEST["info"]=='loginfail'){?>

    <div class="alert alert-danger" role="alert">
    Email Or Password Incorrect Try Again!
  <?php }
  else if($_REQUEST["info"]=='contact'){ ?>
    <div class="alert alert-success" role="alert">
    Your Form Submitted succesfully
  <?php }}?>




    <?php foreach ($query as $q) {?>


    <div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $q['title'];?></h5>
    <p class="card-text"><?php echo substr($q['Content'],0,20); echo ".....";?></p>
    <a href="post.php?id=<?php echo $q['id']?>" class="btn btn-success">Read More <span class="text-danger">&rarr;</span></a>
  </div>
</div>
    <?php }?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>