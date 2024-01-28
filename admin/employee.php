<?php
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{

  $sql=mysqli_query($con, "insert into employee_reg(name, email, password, phone, aadhar_num, address) values ('$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[phone]', '$_POST[aadhar]', '$_POST[address]')") or die(mysqli_error($con));

  if($sql)
  {
    echo '<script> alert("Data Inserted") </script>';
  }
  else
  {
    echo '<script> alert("Something went wrong") </script>';
  }


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Advaita Chit Fund</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Advaita Chit Fund</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

        


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('navbar.php'); ?>
<!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Employees</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-6">
          <div class="row">
          
            <form onsubmit="return validation()" action="#" method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" autocomplete="off">
    <span id="name" class="text-danger font-weight-bold" ></span>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
    <span id="emails" class="text-danger font-weight-bold" ></span>
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password"class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password" autocomplete="off">
    <span id="passwords" class="text-danger font-weight-bold" ></span>
  </div>
  <div class="form-group">
    <label >Phone</label>
    <input type="number" name="phone" class="form-control" id="mobilenumber" aria-describedby="emailHelp" placeholder="Enter phone number" autocomplete="off">
    <span id="mobiles" class="text-danger font-weight-bold" ></span>
  </div>
  <div class="form-group">
    <labe>Aadhar</label>
    <input type="number" name="aadhar" class="form-control" id="aadhar" aria-describedby="emailHelp" placeholder="Enter aadhar number" autocomplete="off">
    <span id="aadhars" class="text-danger font-weight-bold" ></span>
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter address" autocomplete="off">
    <span id="addresses" class="text-danger font-weight-bold" ></span>
  </div>

 
  <input  type="submit" name="submit" class="btn btn-primary" value="submit">
</form>
           

        
           
          </section>
          </div>
        
        </div><!-- End Left side columns -->
       
      
        <!-- Right side columns -->
        <div class="col-lg-4">
          

        </div><!-- End Right side columns -->

      </div>
    </section>
    
  </main>


  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Chitfund</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by Batch 6</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/val.js"></script>

<script type="text/javascript">
  function validation(){
    var name= document.getElementById('name').value;
    var email= document.getElementById('email').value;
    var password= document.getElementById('password').value;
    var mobilenumber= document.getElementById('mobilenumber').value;
    var aadhar= document.getElementById('aadhar').value;
    var address= document.getElementById('address').value;

    if(name=="")
    {
      document.getElementById('name').innerHTML="please enter name";
      return false;
    }
    if(email=="")
    {
      document.getElementById('email').innerHTML="please enter email";
      return false;
    }
    if(password=="")
    {
      document.getElementById('password').innerHTML="please enter password";
      return false;
    }
    if(mobilenumber=="")
    {
      document.getElementById('mobilenumber').innerHTML="please enter mobile number";
      return false;
    }
    if(aadhar=="")
    {
      document.getElementById('aadhar').innerHTML="please enter aadhar";
      return false;
    }
    if(address=="")
    {
      document.getElementById('address').innerHTML="please enter address";
      return false;
    }
    
  }
  </script>
</body>

</html>