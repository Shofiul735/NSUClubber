
<!--header-->
<?php
 session_start();
 include "header.php";
 include 'db.php';
 $club = $pass = $query = $result = $message = null;
 if(isset($_POST['login'])){
   $club = $_POST['club_name'];
   $pass = $_POST['pass'];
   $query = "SELECT `pass` FROM admins WHERE `club_name` = '$club' ";
   $result = mysqli_query($connection,$query);
   if($row = mysqli_fetch_assoc($result)){
     $_SESSION['admin'] = $club;
     if($pass == $row['pass']){
       header('location:../index.php');
     }else{
       $message = "log in unsuccessful";
     }
   }
 }
?>
<!-- end of header-->

<!-- log-in page-->

<section class="h-100vh bg-club">
  <div class="mb-5 text-white">
    <h1 class="text-capitalize display-4 text-center hide cursive show0">log in</h1>
    <h5 class="text-capitalize text-center cursive hide show1">as</h5>
    <h6 class="text-capitalize text-center cursive hide show2">an admin</h6>
  </div>
  <div class="w-50 m-auto text-white">
    <form action = "login.php" method= "post" >
        <div class="form-group">
          <label>Club Name</label>
          <input type="text" class="form-control" name = 'club_name' placeholder="Enter Club Name" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name = 'pass' class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-outline-light form-control text-capitalize">log in</button>
      </form>
    </div>
    <h4 class="text-center text-success"><?php echo $message; ?></h4>
</section>
<!--end of lon-in page-->

<!--footer-->
<?php include "footer.php"; ?>
