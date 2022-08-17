

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Gaurav's Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="create.php">Create New Post</a>
      </li>
      <?php if(empty($_SESSION['name'])){ ?>
      <li class="nav-item active">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <?php }?>
      <li class="nav-item active">
      <?php if(!empty($_SESSION['name'])){ ?>
        <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['name']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <form method="post">
          <button name="logout" class="btn btn-danger btn-lg mx-2">logout</button>
        </form>
        </div>

    <?php }?>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>