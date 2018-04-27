<?php
	if(isset($_GET['loc']))
	{
		$location = $_GET['loc'];

		?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<iframe style="width:100vw;height:100vh" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAfGFAeKmXef8w65mVO6vF9e6WknpzPFdE&q=<?=$location?>" allowfullscreen></iframe>
			</body>
			</html>
		<?php
	}
	else
	{
		header("Location:properties.html");
	}
?>
