app.config(function($routeProvider,$locationProvider){
    $locationProvider.hashPrefix('');
    $routeProvider.when('/',{templateUrl:'views/pageSection/home.html'}).when('/about',{templateUrl:'views/pageSection/about.html',controller:'aboutController'}).when('/download',{templateUrl:'views/pageSection/download.html',controller:'downloadController'}).when('/contact',{templateUrl:'views/pageSection/contact.html',controller:'contactController'}).otherwise({templateUrl:'views/404.html'})

});