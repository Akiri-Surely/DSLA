<?php
	require '../../includes/dslaDB.php';
?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Delta State Government Land Acquistion" />
	<meta name="keywords" content="Delta State, Nigerian Government, Government land, Delta land Acquistion" />
	<meta name="author" content="Akiri Surely" />



  


	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="header-inner">
					<h1><a href="index.html">DSLA<span>.</span></a></h1>
					<nav role="navigation">
						<ul>
							<li><a href="properties.php">Gallery</a></li>
							<li><a href="rent.html">Settings</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Our</span> Trusted Agents</h1>
				</div>
			</div>
		</div>
	</div>
                
	<div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading white animate-box" data-animate-effect="fadeIn">
					
				</div>
				
	                <?php
						$select = $dslaDB->prepare("SELECT name,image FROM `tbl_surveyor`");
						$select->execute();

						while($rows = $select->fetch(PDO::FETCH_ASSOC))
						{
							$name = $rows['name'];
							$image = $rows['image'];
							?>
								<div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
									<figure>
										<img src="images/<?=$image;?>.jpeg" width="280px" height="260px">
									</figure>
									<h3><?=$name;?></h3>
									<p>Veniam laudantium rem odio quod, beatae voluptates natus animi fugiat provident voluptatibus. Debitis assumenda, possimus ducimus omnis.</p>
									<p><a href="#" class="btn btn-primary btn-outline">Contact Me</a></p>
								</div>
						
							<?php
						}
					?>
					
			
			</div>
		</div>
	</div>
	

	

	
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
