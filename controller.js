app.controller("mainController",function($scope,$http){
    // $scope.registerMe=(email,password,matchPasswordStatus)=>{
    //     $scope.signedIn=formFactory.register(email,password);
    //     console.log($scope.signedIn);
       
    // };
    // $scope.matchPassword=(password,confirmPassword)=>{
    //     $scope.matchPasswordStatus=formFactory.matchPassword(password,confirmPassword);
    //     console.log("matchPasswordStatus is",$scope.matchPasswordStatus);
    // }



    $scope.processLogInData=()=>{
        console.log("inside process data $email is",($scope.emailLogIn),"password is ",($scope.passwordLogIn));
        $http.post("signin.php",{
            'email':$scope.emailLogIn,
            'password':$scope.passwordLogIn
        }).success(function(data){
            console.log("data sent successfully",data,"data");
        }).catch(function(){
            console.log("error in sending data");
        })
    }

})