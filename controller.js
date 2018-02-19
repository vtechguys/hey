app.controller("mainController",function($scope,$http){
    // $scope.registerMe=(email,password,matchPasswordStatus)=>{
    //     $scope.signedIn=formFactory.register(email,password);
    //     console.log($scope.signedIn);
       
    // };
    // $scope.matchPassword=(password,confirmPassword)=>{
    //     $scope.matchPasswordStatus=formFactory.matchPassword(password,confirmPassword);
    //     console.log("matchPasswordStatus is",$scope.matchPasswordStatus);
    // }


console.log("inside process data $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn),"running controller");
    $scope.processLogInData=()=>{
        console.log("inside process data $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn));
        $http.post("signin.php",{
            'email':$scope.emailLogIn,
            'password':$scope.passwordLogIn
        }).then(functtion (data){console.log(data);}).catch(function (error){console.log("error occured",error);});
    }

})
