weatherApp.service('weatherService', ['$resource', function($resource) {
    
	
	this.getWeather = function(city, days){

		var weatherAPI = $resource('http://api.openweathermap.org/data/2.5/forecast/daily', {callback: 'JSON_CALLBACK'}, {get: {method: 'JSONP'}});

		return weatherAPI.get({
			q : city,
			units:'metric',
			cnt: days,
			appid: '8cf59b9fde73d3cfa8a6a306774963ba'
		});
		
	};

}]);
