weatherApp.controller('homeController', ['$scope', '$rootScope', '$location', 'cityService', function($scope, $rootScope, $location, cityService) {


	// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	// 	console.log('is mobile');
	// }
	// else{
	// 	console.log('not mobile');
	// }

	$scope.location = $location.path();
	
	$scope.city = cityService.city;
	
	$scope.$watch('city', function() {
        cityService.city = $scope.city;
    });
	
	$scope.submit = function(){
		
		$location.path("/forecast");
	
	};

	$rootScope.$on('$routeChangeSuccess', function() {
	    $scope.location = $location.path();
	});

}]);