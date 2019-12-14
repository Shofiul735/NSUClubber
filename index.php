<?php
  session_start();
  include 'includes/db.php';
  $admin = null;
  if(isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NSU CLUBER</title>
    <link rel="icon" href="images/icon.svg">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  </head>
  <body>
      <!-- navbar start -->
        <?php
          if($admin == null){
            include 'includes/navbar.php';
          }else{
            include 'includes/navbar-admin.php';
          }
         ?>
      <!-- navbar end -->

      <!--Banner section start-->
          <section>
            <div class="container-fluid p-0 m-0">
                <div class="h-90vh bg-club">
                  <div class="h-75 d-flex justify-content-center align-items-center text-white">
                    <h1>Welcome to <span class="text-primary hide show0">nsu</span><span class="hide show1 ">CLUB</span><span class="text-warning hide cursive show2">ER</span></span></h1>
                  </div>
                  <br>
                  <div class="w-100 text-center">
                    <a class="btn btn-outline-warning mr-3" href="includes/recruitment.php">Recruitment</a>
                    <a class="btn btn-outline-warning ml-3" href="includes/contact.php">Conatct</a>
                  </div>
                </div>
            </div>
          </section>
      <!--Banner section end-->

      <!--event section start-->
      <section>
        <div class="container">
          <div class="mt-5">
            <h3 class="text-uppercase text-secondary text-left">On going event and seminar </h3>
          </div>
          <div class="row">
          <div class="mt-5 col-md-8 col-12 m-auto">
            <div>
            <h6 class="text-capitalize text-left text-club">Event or seminar title</h6>
            <p class="m-0">Start :date and time</p>
            <p class="m-0">End: date and time</p>
            <p class="m-0">Place:Sac514</p>
            <p class="m-0" >Owner:<span class="text-success">club name</span></p>
            <img class="img-thumbnail img-size-event" src="images/nsussc.jpg" alt="enent poster">
            <details>
              <summary class="text-club">Event Summary</summary>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </details>
          </div>
          <div class="text-center my-4">
            <a href="includes/event.php" class="btn btn-outline-secondary text-uppercase">more</a>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <h5 class="text-left text-info">About nsucluber.org</h5>
          <p class="text-left text-muted lead"><strong>nsuCluber</strong>,Bangladeshi company offering online social networking services. <strong>nsuCluber</strong> was founded in 2019 by <strong>Md.Shofiul Islam</strong>(Project Leader),Pranto Ghosh, Ekhfa Hossain, all of them are students at North South University. <strong>nsuCluber</strong> became the largest social network in the world, with more than one billion users as of 2019, and about half that number were using nsuCluber every day. The company’s headquarters are in Menlo Park, California.</p>
        </div>
        </div>
      </div>
      </section>
      <!--event section end-->
      <!--footer section start-->
        <footer class="text-center">
          <p class="text-secondary"> &copy; 2019 nsucluber.org All Rights Reserved</p>
        </footer>
      <!--footer section end-->
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/style.js"></script>
      </body>
      </html>
