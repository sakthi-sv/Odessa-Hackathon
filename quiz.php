<?php
include("config.php");
include("session.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $s3 = "update user set qmak=50 where course='Angular JS'";
    $r3 = mysqli_query($db,$s3);
    header("location:index.php");
}

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
	<title>Contacts</title>

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
    <?php include("header.php")?>
    <!-- ================ End Header Area ================= -->

	<!-- ================ start banner Area ================= -->
	<section class="banner-area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12 banner-right">
					<h1 class="text-white">
						Your Quiz
					</h1>
					<p class="mx-auto text-white  mt-20 mb-40">
						if you face any difficulty please post your response in the <a href="forums.php">forums</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ End banner Area ================= -->

	<!-- ================ Start contact-page Area  ================= -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Your Courses
  </a>
  <?php while($row = $r1->fetch_assoc()){?>
  <a onclick='change("<?php echo $row['course'];?>")' href="#" class="list-group-item list-group-item-action"><?php echo $row['course'];?></a>
  <?php }?>
  
</div>
				</div>
				<div class="col-lg-8">
                <ul class="list-group">
                    
                    <?php while($row = $r2->fetch_assoc()){?>
                        <li class="<?php echo $row['course'];?> list-group-item all">
                <a href="#" class="list-group-item list-group-item-action active">
    <?php echo $row['question'];?>?
  </a>
  
  <div class="input-group-text">
    <input type="radio" name="<?php echo $row['id'];?>" aria-label="Radio button for following text input">True &nbsp;&nbsp;
    <input type="radio" name="<?php echo $row['id'];?>" aria-label="Radio button for following text input">False &nbsp;&nbsp;
    <input type="radio" name="<?php echo $row['id'];?>" aria-label="Radio button for following text input">Neither true nor false
    </div>

  </li>
                    <?php }?>
</ul><br>
    <form action="" method="post">


        <button onclick="done()" class="btn btn-seconday">Submit answer</button>
    </form>
  </div>
	</section>
	<!-- ================ End contact-page Area ================= -->

	<!-- ================ start footer Area ================= -->
    <?php include("footer.php");?>
    <!-- ================ End footer Area ================= -->
    
    <script>
        all = document.querySelectorAll(".all");
        for(let i=0;i<all.length;i++)
            {
                all[i].style.display='none';
            }
            ele = document.querySelectorAll(".Angular");
            for(let i=0;i<ele.length;i++)
            {
                ele[i].style.display='block';
            }
        function change(course)
        {
            all = document.querySelectorAll(".all");
            for(let i=0;i<all.length;i++)
            {
                all[i].style.display='none';
            }
            c = course.split(" ");
            ele = document.querySelectorAll("."+c[0]);
            for(let i=0;i<ele.length;i++)
            {
                ele[i].style.display='block';
            }
        }

        function done()
        {
            alert("response submitted");
            window.location.href = "index.php";
        }

    </script>

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