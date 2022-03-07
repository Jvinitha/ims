<style>
.err { display: none;
color:red;
}
.ng-submitted .err {
     display: block;
}
</style>
<div ng-app="myApp" ng-controller="myCtrl"> 
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                            </div>
                            <form name ="myform" novalidate ng-submit="regitem(myform)">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type = "hidden" name = "id" ng-model="id">
                                        <input type="text" name="firstname" ng-model="firstname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" required>
                                                <span class="err" ng-show="myform.firstname.$error.required">Firstname is required</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" ng-model="lastname" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" required>
                                                <span class="err" ng-show="myform.lastname.$error.required">Lastname is required</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" ng-model="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" required>
                                                <span class="err" ng-show="myform.email.$error.required">Email is required</span>
                                                <span class="err" ng-show="myform.email.$error.email">Email is not valid</span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" ng-model="password" placeholder="Password" required minlength="8" maxlength="14"> 
                                                <span class="err" ng-show="myform.password.$error.required">Please enter password</span>
                                                <span class="err" ng-show="myform.password.$error.minlength">Please enter minimum 8digit number</span>
                                                <span class="err" ng-show="myform.password.$error.maxlength">Please enter maximum 14digit number</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="passconf" ng-model="passconf" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" ng-click="regitem()" class="btn btn-primary btn-block">Register</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                            <a href="<?php echo site_url('inventory/login');?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>    
<script>
          
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $http) {
                
                    $scope.regitem = function (myform){
                        if(myform.$invalid){//return false when i/p is undefined also btn type must "submit"
                            return false;
                        }
                    var request = $http({
                    method: "post",
                    url: "<?php echo site_url('inventory/add_register');?>",
                    data: {
                        updatetype: "add",
                        firstname: $scope.firstname,
                        lastname: $scope.lastname,
                        email: $scope.email,
                        password: $scope.password,
                  }
                }).then(function(response){
                 var status = response.data.status;
                //console.log(status);
                 if(status == "inserted"){
                    window.location = "<?php echo site_url('inventory/login');?>";
          }else{
                    alert("already registered");
                  
                }
        
                      });
        
        }
        });
        </script>


