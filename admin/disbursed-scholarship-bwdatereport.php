<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Scholarship Management System||B/W Dates Report of Scholarship Application</title>
 
  <!-- Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Sidebar CSS-->
  <link href="../assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="../assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
   <?php include_once('includes/sidebar.php');?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<?php include_once('includes/header.php');?>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">B/W Dates Report</div>
           <hr>
            <form method="post" name="bwdatesreportschapp" action="bwdates-reports-details-disbursedsch.php">
              
           <div class="form-group">
            <label for="input-1">From Date</label>
            <input type="date" class="form-control" id="fromdate" name="fromdate" value="" required='true'>
           </div>
           <div class="form-group">
            <label for="input-2">To Date</label>
            <input type="date" class="form-control" id="todate" name="todate" value="" required='true'>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5" name="submit"><i class="icon-lock"></i> Submit</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

   
  </div><!--End wrapper-->

 <!-- Bootstrap core JavaScript-->
 <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
 
	
</body>
</html>
<?php }  ?>