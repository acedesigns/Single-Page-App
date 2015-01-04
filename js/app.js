
var myApp = angular.module("myApp",[
	"ngRoute",
	"countryControllers"
]);

myApp.config(["$routeProvider", function($routeProvider) {
	$routeProvider.
	when("/countries", {
		templateUrl : "pages/country.php",
		controller  : "IndexCountryController"
	}).
	when("/details/:itemId", {
		templateUrl : "pages/country-details.php",
		controller  : "DetailsCountryController"
	}).
	otherwise({
		redirectTo : "/countries"
	});
}]);
