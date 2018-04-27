<?php
	require '../../includes/dslaDB.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
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

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- jQuery -->
	<script src="js/jquery.min.js"></script>

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
							<li><a href="agents.php">Agents</a></li>
							<li><a href="settings.php">Settings</a></li>
							<li><a href="contact.html">Contact Us</a></li>
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
					<h1><span class="colored">All</span> Properties</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="best-deal">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>We are Offering Best Deals</h2>
					<p>Booked Appointments are subject to review based on land availability.</p>
				</div>
				
				<?php
					$select = $dslaDB->prepare("SELECT * FROM tbl_lands INNER JOIN tbl_availability ON tbl_lands.land_id = tbl_availability.land_id INNER JOIN tbl_survey_plan ON tbl_survey_plan.land_id = tbl_lands.land_id");
					$select->execute();

					while($rows = $select->fetch(PDO::FETCH_ASSOC))
					{
						$id = $rows['land_id'];
						$price = $rows['land_price'];
						$location = $rows['location'];
						$lga = $rows['lga'];
						$name = $rows['land_name'];
						//$image = $rows['image'];
						//$imageArr = preg_split('@(?:/s*,/s*|/^s*|/s*$)@',$rows['image'],NULL,PREG_SPLIT_NO_EMPTY);
                        $imageArr = explode(',', $rows['image']);
						$status = $rows['status'];
						$dimensions = $rows['dimensions'];


						?>
							<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn" >
								<div class="fh5co-property">
									<div class="flexslider">
										<ul class="slides">
											<?php
												foreach ($imageArr as $image) 
												{
													?>
													    <li style="width: 400px;height: 250px">
													      <img src="images/<?=$image;?>.jpg" />
													    </li>
													<?php
												}
											?>
										</ul>
									</div>
									<figure>
										<a href="#" class="tag"><?=$status;?></a>
									</figure>
									<div class="fh5co-property-innter">
										<h3><a href="#"><?=$name;?></a></h3>
										<div class="price-status">
					                 	<span class="price">$<?=number_format($price,2);?></span>
					               </div>
					               <p> 
					               	<?=$dimensions;?>
					               </p>
				            	</div>
				            	<button id="book_<?=$id;?>" style="margin-left:30px" class="btn btn-primary">BOOK</button>

				            	<div style="text-align:right">
				            		<a href="pin.php?loc=<?=$location;?>">
				            			<img src="images/pin.png" id="loc_pin" style="cursor:pointer;width:30px;height:30px">
				            		</a>
				            	</div>
                                  <script>
								      $('#loc_pin').click(function()
								      { 
								         location.href = "https://";
								      });

								      $('#book_<?=$id;?>').click(function()
								      { 
								      	$('#btnBook').attr('data-id','<?=$id;?>');

								      	$('section').fadeIn('2000');

							            $('.form_datetime').datetimepicker(
							            {
							                 //language:  'fr',
							                 weekStart: 1,
							                 todayBtn:  1,
							         		autoclose: 1,
							         		todayHighlight: 1,
							         		startView: 2,
							         		forceParse: 0,
							                 showMeridian: 1
							            });
								      });
								</script>
								</div>
							</div>
						<?php
					}
				?>
			</div>
			<div class="row">
				<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
					<nav>
					  <ul class="pagination">
					    <li class="disabled">
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>


	
	</div>
	
	<section style="display:none;position:fixed;left:0;right:0;top:0;bottom:0;background-color:rgba(0,0,0,0.8);z-index:100">
		<div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1" style="left:40%;top:50%;position:relative;">
            <input id="txtDate" size="16" type="text" value="" readonly>
            <span class="add-on" style="height:auto"><i class="icon-remove"></i></span>
			<span class="add-on" style="height:auto"><i class="icon-th"></i></span>
			<br>
			<button id="btnBook" class="btn btn-primary">BOOK</button>
			<button id="btnClose" class="btn btn-primary">CLOSE</button>
        </div>
		<input type="hidden" id="dtp_input1" value="" />
		
	</section>

	
	<!-- <div id="modal_box" style="display:block;position:fixed;left:0;right:0;top:0;bottom:0;background-color:rgba(0,0,0,0.8);z-index:200">
		<div style="left:50%;right:50%;transform:translate(-50%,-50%);height:300px;width:30%;background-color:#fff;position:fixed;text-align:center;">
			<span id="modal_content"></span>
			<button id="modal_ok">OK</button>
        </div>
	</div>	 -->
	
	
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

	<script src="js/bootstrap-datetimepicker.js"></script>

	<script>
		$(function() 
		{
		  $('.flexslider').flexslider(
		  {
		    animation: "slide",
		    controlsContainer: $(".custom-controls-container"),
		    customDirectionNav: $(".custom-navigation a")
		  });
		});
	    /*$('#btnOpen').click(function()
	    { 
	       $('section').fadeIn('2000');
	    });*/

	    $('#btnBook').click(function()
	    { 
	       var id = $(this).attr('data-id');
	       var date = $('#txtDate').val();

	       $.post('../../ss.php?book',{1:id,2:date},function(response)
	       {
	       		if(response==1)
	       		{
	       			alert('You have successfully booked!');
	       		}
	       		else
	       		{
	       			alert('There was an error booking the appointment!');
	       		}
	       });
	    });

	    $('#btnClose').click(function()
	    { 
	       $('section').fadeOut('2000');
	    });

	    $('.form_datetime').datetimepicker({
	        //language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 1
	    });
	</script>


     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4BpHy8wZtsfqFqYO3Cx4ZpbkuvQep1dU&callback=initMap"></script>
	</body>
</html>

