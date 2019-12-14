<?php
  if(isset($_POST['logout'])){
    session_start();
    $_SESSION['admin'] = null;
    header('location:index.php');
  }

 ?>

<nav class="navbar navbar-expand-md navbar-light">
  <a class="navbar-brand" href="index.php"> <img class="logo" src="images/logo.png" alt="logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ml-auto nav-hover">
        <a class="nav-link text-capitalize" href="includes/contact.php">contact</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link text-capitalize" href="includes/event.php">event/seminar</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link text-capitalize" href="includes/recruitment.php">recruitment</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link text-capitalize btn mr-1 btn-outline-success nav-btn" href="includes/recruitment.php">Admin Dashboard</a>
      </li>

      <li class="nav-item ml-auto">
        <form action="index.php" method="post">
          <button class="nav-link text-capitalize btn btn-outline-danger nav-btn" name="logout" >log out</a>
        </form>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="fsorm-control-sm form-custom form-color mr-sm-0 ml-auto" placeholder="Search">
      <button class="btn btn-outline-secondary btn-custom my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
