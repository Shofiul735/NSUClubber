<!--header-->
<?php
  include 'header.php';
  include 'db.php';
 ?>

<!-- header end-->
<!--contact <section> start-->
<section class="bg-club h-100vh">
  <div class="container pt-5 m-auto">
      <h1 class="display-3 cursive text-light text-center mb-4">Contact information</h1>
      <div class="row">
        <?php
          $query = 'SELECT * FROM contacts';
          $result = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($result)){
           ?>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card mb-2" style="width:300px">
            <img class="card-img-top m-auto" src="../images/club.png" alt="unity" style="height:150px;width:150px;">
            <div class="card-body">
              <h5 class="card-title text-uppercase"><?php echo $row['club_name']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted">Email:<?php echo $row['email']; ?></h6>
              <h6 class="card-subtitle mb-2 text-muted">Mobile:0<?php echo $row['mobile']; ?></h6>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
  </div>
</section>
<!--contact <section> end-->

<!--footer-->
<?php include 'footer.php'; ?>
<!--footer end-->
