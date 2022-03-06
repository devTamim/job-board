
<?php
require_once "partial/db.php";
session_start();

  if(!isset($_SESSION['user'])){
   header('Location:login.php');
   }
?>

<?php include_once "include/header.php"?>
    <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <?php include_once "include/sidebar.php"?>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
     <h1 class="m-5">hello world  </h1>
    </section>
  



  </div>



 


  <?php include_once "include/footer.php"?>