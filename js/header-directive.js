app.directive("todoHeader",function(){
  
    var object={
        templateUrl:'views/headerFooter/header.html',
        controller:'headerController',
        restrict:'A'
    }
    return object;
});