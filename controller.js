app.controller("mainController",function($scope,$http){
    


console.log("inside mainController $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn));
    $scope.processLogInData=()=>{
        console.log("inside process data $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn));
        $http.post("signin.php",{
            'email':$scope.emailLogIn,
            'password':$scope.passwordLogIn
        }).then(function (data){console.log(data);
        console.log("inside process data $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn));
    }).catch(function (error){console.log("error occured",error);});
    }

})
