<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#db5945">

    <title>ToDOWise</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/todo.css" rel="stylesheet">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/addToDo.css">
<!-- <script src="bower_components/angular/angular.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
<!-- <script src="bower_components/angular-route/angular-route.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-route.js"></script>
<script src="app.js"></script>

<script src="js/headerController.js"></script>
<script src="js/header-directive.js"></script>
<script src="js/footerController.js"></script>
<script src="js/footer-directive.js"></script>
<script src="js/aboutController.js"></script>
<script src="js/downloadController.js"></script>
<script src="js/contactController.js"></script>
<script src="js/formFactory.js"></script>

<script src="controller.js"></script>
<script scr="factory.js"></script>
<script src="spa-routes.js"></script>
<script >


</script>



  </head>

  <body id="page-top" ng-app="todoApp" ng-controller="mainController">
<div id="container">
    <!-- Navigation -->
   <div id="headerNav" todo-header ></div>
    <!-- About Section -->
    <!-- Download Section -->
    <!-- Contact Section -->
   <div id="pageSection">
     <ng-view></ng-view>
   </div> 
<!-- Footer -->
<div id="todoFooter" todo-footer></div>
<!-- here we have modal for log-in and sign up-->
<!-- Trigger the modal with a button -->
<!-- <div class="addTODo">
    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i></a>
</div> -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" ng-if="!signedIn">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <ul class="nav nav-tabs">
               <li class="nav-item">
                 <a class="nav-link" href="#" id="login-form-link">Sign In</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#" id="register-form-link">Sign Up</a>
               </li>
             
             </ul>
 
 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" >
           <div class="formSignIN-UP">
               <div class="row">
                 <div class="col-12">
                   <form id="login-form"  method="post" role="form" style="display: block;">
                     
                     <div class="form-group">
                        <input type="email" name="email" id="emailLogIn" tabindex="1" class="form-control" placeholder="Email" ng-model="emailLogIn">
                      </div>
                     <div class="form-group">
                       <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" ng-model="passwordLogIn">
                     </div>
                     
                     <div class="form-group">
                       <div class="row">
                         <div class="col-12">
                           <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" ng-click="processLogInData()" value="Sign In">
                         </div>
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="row">
                         <div class="col-12">
                           <div class="text-center">
                             <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </form>
                   <form id="register-form" ng-sumbit="processSignUp()"method="post" role="form" style="display: none;">
                     
                     <div class="form-group">
                       <input type="email" name="email" ng-model="emailSingnUp" tabindex="1" class="form-control" placeholder="Email Address" value="">
                     </div>
                     <div class="form-group">
                       <input type="password" name="password" ng-model="passwordSignUp" tabindex="2" class="form-control" placeholder="Password">
                     </div>
                     <div class="form-group">
                       <input type="password" name="confirm-password" ng-model="confirmPassword" tabindex="2" class="form-control" placeholder="Confirm Password" >
                       <!-- <div id="matchPaswordStatus" ng-show="matchPasswordStatus">
                         <p ng-if="matchPasswordStatus">Password Match</p>
                         <p ng-if="!matchPasswordStatus">Password Did Not Match</p>
                       </div> -->
                     </div>
                     <div class="form-group">
                       <div class="row">
                         <div class="col-12">
                           <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" ">
                         </div>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
 
         
        </div>
       
      </div>
      
    </div>
  </div>
 </div>
 
 
 
 
 
 
 <!-- modal for login and sign up ends here-->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom scripts for this template -->
    
    <script src="js/form.js"></script>

  </body>

</html>
