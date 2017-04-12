weatherApp.controller('forecastController', ['$scope', '$routeParams', '$location', 'cityService', 'weatherService', function($scope, $routeParams, $location, cityService, weatherService) {

	$scope.city = cityService.city;

	$scope.days = $routeParams.days || 5;
	
	$scope.daysString = $scope.days > 1 ? 'days' : 'day';

	weatherService.getWeather($scope.city, $scope.days).$promise.then(

		//success
		function(data){
			$scope.weatherResult = data;
		},
		
		//error
		function( error ){
			$location.path("/error");
		}
	);
	
	$scope.toInt = function(val){
		return parseInt(val);
	};
}]);