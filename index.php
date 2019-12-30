<?php 
  include("config.php");
  include("session.php");

  $sql = "Select * from video";
  $result = mysqli_query($db,$sql);
?>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Eclipse Education</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS
      =============================================
    -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <?php include("header.php");?>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 col-md-8 home-banner-left">
          <h1 class="text-white">
            Free and the Best way <br />
            to learn the unknown
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Fun E-learn is the leading e learning web site to learn the leading technologies
          </p>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="img/header-img.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="feature-area">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-book"></i>
            <div class="ml-20">
              <h4>New Classes</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-cup"></i>
            <div class="ml-20">
              <h4>Top Courses</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex border-right-0">
            <i class="ti-desktop"></i>
            <div class="ml-20">
              <h4>Full E-Books</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->
<!-- ================ Start Popular Course Area ================= -->
<section class="popular-course-area section-gap">
    <div class="container-fluid">
      <div class="row justify-content-center section-title">
        <div class="col-lg-12">
          <h2 style="color:violet">
            Your Course Dashboard
          </h2>
          <p>
            
          </p>
        </div>
      </div>
      <div class="owl-carousel popuar-course-carusel"><?php echo $dash;?></div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->

 
  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area section-gap">
    <div class="container-fluid">
      <div class="row justify-content-center section-title">
        <div class="col-lg-12">
          <h2>
            Popular Courses <br />
            Available Right Now
          </h2>
          <p>
            
          </p>
        </div>
      </div>
      <div class="owl-carousel popuar-course-carusel">

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p1.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="angular.php">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p2.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$100</p>
            </div>
            <a href="node.php">
              <h4>Learn Node JS Course for Legendary Persons</h4>
            </a>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p3.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$450</p>
            </div>
            <a href="react.php">
              <h4>Learn React JS Course for Legendary Persons</h4>
            </a>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p4.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$350</p>
            </div>
            <a href="vue.php">
              <h4>Learn Vue JS Course for Legendary Persons</h4>
            </a>
          </div>
        </div>



      </div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->

  <!-- ================ Start Video Area ================= -->
  <section class="video-area section-gap-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="section-title text-white">
            <h2 class="text-white">
              Watch Our Trainers <br>
              in Live Action
            </h2>
            <p>
              In the history of modern astronomy, there is probably no one greater leap forward than the building and
              launch of the space telescope known as the Hubble.
            </p>
          </div>
        </div>
        <div class="offset-lg-1 col-md-6 video-left">
          <div class="owl-carousel video-carousel">
            <?php while($row = $result->fetch_assoc()){?>
            <div class="single-video">
              <iframe width="530" height="400" src="<?php echo $row['link'];?>">
</iframe>
<h4 class="text-white mb-20 mt-30"><?php echo $row['course'];?></h4>
              <p class="text-white mb-20">
              <?php echo $row['description'];?>
              </p>
            </div>
            <?php }?>

           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Video Area ================= -->

  <!-- ================ start footer Area ================= -->
  <?php include("footer.php");?>
  <!-- ================ End footer Area ================= -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>