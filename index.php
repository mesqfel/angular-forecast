<!DOCTYPE html>
<html lang="en-us" ng-app="weatherApp" ng-controller="homeController" ng-class="{'full-height' : location == '/' || location == '/error'}"> 
    <head>
        <title>Weather Forecast - AngularJs SPA</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8">

		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="public/css/materialize.min.css" media="screen,projection"/>

		<link type="text/css" rel="stylesheet" href="public/css/forecast.css"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body ng-class="{'full-height' : location == '/' || location == '/error'}">


		<div class="bg">

	        <div class="container" ng-class="{'div-input-forecast' : location == '/'}">
				
		        <div class="row" ng-class="{'padding-top-50px' : location != '/'}">
		        	<div ng-view ng-class="{'col s12 m6 offset-m3' : location != '/'}"></div>
		        </div>

			</div>	

			<div class="text-align-center margin-bottom-20px" ng-hide="location == '/'">
				<p class="font-size-12px margin-top-minus20px">
					Made with <span class="position-relative top-3px"><i class="tiny material-icons" style="">favorite</i></span> by Felipe Mesquita
				</p>
			</div>		
		</div>

    </body>
	
	<!-- load JS -->
	<script src="public/js/jquery-2.1.1.min.js"></script>
	<script src="public/js/angular.min.js"></script>
	<script src="public/js/angular-route.min.js"></script>
	<script src="public/js/angular-resource.min.js"></script>
	<script src="app.js"></script>
	<script src="public/js/materialize.min.js"></script>
	<script src="routes.js"></script>
	<script src="controllers/homeController.js"></script>
	<script src="controllers/forecastController.js"></script>
	<script src="directives/forecastDay.js"></script>
	<script src="services/cityService.js"></script>
	<script src="services/weatherService.js"></script>

</html>