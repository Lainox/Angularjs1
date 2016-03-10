var app = angular.module('miaplicacion',[]);
app.controller('miappcontroller',['$scope','$http', function($scope, $http){
	$http.get("procesar.php").success(function(response){
		$scope.ciudades = response;
	});
}]);