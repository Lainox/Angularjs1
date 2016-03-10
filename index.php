<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	
</head>
<body>
	<center>
	<div ng-app="miaplicacion" ng-controller="miappcontroller">

		<select class="form-control" style="width: 200px;">
  			<option ng-repeat="x in ciudades" value="{{ x.id }}">{{ x.nombre }}</option>
  			
		</select>
		
	</div>
</center>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>