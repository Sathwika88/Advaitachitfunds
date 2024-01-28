<?php
include('admin/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Advaita Chit Funds</title>
  <meta property="og:title" content="Advaita Chit Funds India Pvt Ltd." />
  <meta property="og:description" content="A safe heaven for your hard earned savings!" />
  <meta property="og:image" content="http://advaitachitfunds.in/assets/img/logo.png" />

  <!-- Favicon -->
  <link href="assets/img/favicon.png" rel="icon" />
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <style>
    .dropdown {
      display: inline-block;
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      width: 100%;
      overflow: auto;
      box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      display: block;
      color: #000000;
      padding: 5px;
      text-decoration: none;
    }

    .dropdown-content a:hover {
      color: #FFFFFF;
      background-color: #00A4BD;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid" /></a>
      <h3 class="logo"><a href="index.html">Advaita Chit Funds</a></h3>

      <?php include('navbar.php'); ?>
    <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
 
  <!-- End Hero -->

  <!-- ======= About Section ======= -->
 
  <!-- End About Section -->

  <main id="main">

    <!-- ======= Perks Section ======= -->
   

    <!-- ======= Counts Section ======= -->
   
    <!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->
   
    <!-- End About Video Section -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Chits Operated by Us</h2>
          <p>
            These are some of the Chits Operated by our Company, for more
            details and if any doubts, feel free to
            <a href="#contact">contact us</a>!
          </p>
        </div>
        <div class="table-wrapper">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sl. No:</th>
              <th scope="col">Chit Value</th>
              <th scope="col">Monthly Subscription</th>
              <th scope="col">No. of Months</th>
            </tr>
          </thead>
          <tbody>
<?php
$i=1;
  $sql=mysqli_query($con,"select * from chits");
  while($result=mysqli_fetch_array($sql))
  {
?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $result['value']; ?></td>
              <td><?php echo $result['subscription']; ?></td>
              <td><?php echo $result['months']; ?></td>
            </tr>

            <?php $i++;} ?>
           
          </tbody>
        </table>
      </div>
      </div>
    </section>
    <!-- End Sevices Section -->

    <!-- ======= Portfolio Section ======= -->
   
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
   
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
  
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="d-md-flex justify-content-between" style="width: 100%">
      <div class="copyright container">
        <p>Copyright 2022. All Rights Reserved</p>
        <!--&copy; Copyright 2022 <strong><span>Advaita</span></strong> chitfunds,
          India. All Rights Reserved-->
      </div>

    </div>
  </footer>
  <!-- End Footer -->
  <!----back to top-->


  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/vanilla-counter-main/vanilla-counter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>