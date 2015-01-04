var countryControllers = angular.module("countryControllers",["ngAnimate"]);

countryControllers.controller("IndexCountryController",["$scope", "$http", function ($scope,$http) {
	$http.get("json/results.json").success(function(data) {
		$scope.country = data;
	});
}]);


countryControllers.controller("DetailsCountryController",["$scope", "$http", "$routeParams", function ( $scope, $http, $routeParams) {
	$http.get("json/results.json").success(function(data) {
		$scope.country = data;
		$scope.whichItem = $routeParams.itemId;

	});
}]);