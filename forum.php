<?php
include("config.php");
include("session.php");

$sql = "Select * from forum";
$result = mysqli_query($db,$sql);

if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form 
	
	$question = mysqli_real_escape_string($db,$_POST['question']);
	$sql = "INSERT into forum values('','$question','Not answered yet...')";
	$result = mysqli_query($db,$sql);
	header("location:forum.php");
 
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
						Ask Us
					</h1>
					<p class="mx-auto text-white  mt-20 mb-40">we are any time ready to help you</p>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ End banner Area ================= -->

	<!-- ================ Start contact-page Area  ================= -->
	<section class="contact-page-area section-gap">
							<div class="container" >
									<h2 style="font-family:sans-serif;color:blue">Ask the query below </h2><br><br>
									<form action="" method="post">
										<div class="col-lg-12 form-group">
									<textarea class="common-textarea form-control" name="question" placeholder="Enter your query here....." onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter your query here'" required=""></textarea>
								</div>
								<div class="col-lg-12">
									<div class="alert-msg" style="text-align: left;"></div>
									<button class="btn btn-primary">Submit</button>
								</div>

									</form>
							<br><br>
							<ul class="list-group col-lg-12">
	<li class="list-group-item active" style='text-align:center'>Frequently asked questions</li>
	<?php while($row = $result->fetch_assoc()){?>
	<li class="list-group-item"><p style="color:black"><?php echo $row['question'];?></p><p><?php echo $row['answer'];?></p></li>
	<?php } ?>
</ul>
							
		</div>
	</section>
	<!-- ================ End contact-page Area ================= -->

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