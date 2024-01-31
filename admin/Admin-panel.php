<?php
include 'database/connection.php';
?>
<?php
 session_start();
 if(!isset($_SESSION['admin_name'])){
    header("location: index.php");
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->

</head>
<body>

    
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo " href="index.html"><img src="../images/team-1.jpg" alt="logo" style="height:3.9rem; width:5rem; border-radius:30px"><p style="font-size:1.4rem;display:inline; margin-left:1rem">Admin Panel</p></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="" alt="logo" style="height:4rem; width:5rem;"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
        </button>  
             
            </div>
          </li>
        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <form method="POST">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="Admin-panel.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="user_list_table.php">
            <img src="user1.png" alt="" style="height:25px; width:25px; border-radius: 150px;"></i>
              <span class="menu-title"style="margin-left:20px;">Users</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contact Us.php">
              <img src="contacts.png" alt="" style="height:25px; width:25px; border-radius: 200px;"></i>
              <span class="menu-title"style="margin-left:20px;">Contact Us</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <img src="left.png" alt="" style="height:25px; width:25px; border-radius: 200px;"></i>
              <span class="menu-title"style="margin-left:20px;">View of Website</span>
            </a>
          </li>
             
            <li class="nav-item">
            <a class="nav-link">
            <img src="logout.png" alt="" style="height:25px; width:25px; border-radius: 200px;"></i>
              <button class="menu-title" style="margin-left:20px; border:none; background:none;" name="logout">Logout</button>
            </a>
            
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">

              </ul>
            </div>
          </li>
          
        </ul>
        </form>
      </nav>

      <?php
      if(isset($_POST['logout']))
      {
        session_destroy();
        header("location:index.php");
      }

      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0" style="font-size:2rem;">Dashboard</h4>
                </div>
                <div>
                   
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card" style="position:relative; left:1.6rem">
            <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left" style="font-size:1.6rem; margin-right:2rem;">Users</p>
                  <?php
                  $dash_user_query ="SELECT * FROM users";
                  $dash_user_query_run=mysqli_query($conn, $dash_user_query);
                  if($user_total = mysqli_num_rows($dash_user_query_run))
                  {
                     echo '<h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style="margin-left:4rem; position:relative; top:3.5rem;">'.$user_total.'</h3>';
                  }else{
                    echo '<h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"style=" margin-left:4.4rem; position:relative; top:3.5rem;">0</h3>';
                  }

                  ?>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                   <a href="user_list_table.php"><img src="user1.png" style="margin-left:3rem; position:relative; top:-2rem; font-size:3.7rem; height:55px; width:66px; text-decoration:none; border-radius:100px;"></i></a>
                  </div>
              
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card" style="position:relative; left:9rem">
            <div class="card">
                <div class="card-body">
                <p class="card-title text-md-center text-xl-left" style="font-size:1.6rem; margin-right:rem;">Contacts</p>
                  <?php
                  $dash_message_query ="SELECT * FROM contact";
                  $dash_message_query_run=mysqli_query($conn, $dash_message_query);
                  if($message_total = mysqli_num_rows($dash_message_query_run))
                  {
                     echo '<h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style=" margin-left:4rem; position:relative; top:3.5rem;">'.$message_total.'</h3>';
                  }else{
                    echo '<h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style=" margin-left:4.5rem; position:relative; top:3.5rem;">0</h3>';
                  }

                  ?>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                  <a href="Contact Us.php"> <img src="contacts.png" alt="" style="margin-left:3rem; position:relative; top:-2rem; height:55px; width:66px; border-radius:20px;"></i></a>
                  </div>
                
                
                  <!-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ms-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
           
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

