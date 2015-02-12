<?php
	require_once "php/classes/database.php";
	$database->getJsonData();
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Angular Single Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Le Styles -->
	<link rel="stylesheet" href="css/lib/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Le Scripts -->
	<script src="js/lib/angular.1.3.5.min.js"></script>
	<script src="js/lib/angular-route.1.2.28.min.js"></script>
	<script src="js/lib/angular-animate.1.2.28.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>
</head>
<body>

	<div class="container">
		<div class="row" ng-view> 
		</div>
	</div>

<!--Le Foooter Scripts -->
<script src="js/lib/jquery.1.9.1.min.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
</body>
</html>