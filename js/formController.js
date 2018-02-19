app.controller("formController",function($http,$scope){

 $scope.processLogInData=()=>{
        console.log("inside process data $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn));
        $http.post("signin.php",{
            'email':$scope.emailLogIn,
            'password':$scope.passwordLogIn
        }).then(function(data){
            console.log("data sent successfully",data,"data");
        }).catch(function(){
            console.log("error in sending data");
        })
    }


});
