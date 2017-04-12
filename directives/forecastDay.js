weatherApp.directive("forecastDay", function() {
   return {
       restrict: 'E',
       templateUrl: 'directives/forecastday.html',
       replace: true,
       scope: {
           forecastObject: "=",
           toInt: "&"
       }
   };
});