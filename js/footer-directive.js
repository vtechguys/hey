app.directive("todoFooter",function(){
    var object={
        templateUrl:'views/headerFooter/footer.html',
        controller:'footerController',
        restrict:'A'
    }
    return object;
})