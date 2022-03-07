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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                   <form name ="myform" novalidate ng-submit="loginitem(myform)">
                                        <div class="form-group">
                                        <input type = "hidden" name = "id" ng-model="id">
                                            <input type="email" ng-model="email" name = "email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address" required>
                                                <span class="err" ng-show="myform.email.$error.required">Email is required</span>
                                                <span class="err" ng-show="myform.email.$error.email">Email is not valid</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" ng-model="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" required minlength="8" maxlength="14"> 
                                                <span class="err" ng-show="myform.password.$error.required">Please enter password</span>
                                                <span class="err" ng-show="myform.password.$error.minlength">Please enter minimum 8digit number</span>
                                                <span class="err" ng-show="myform.password.$error.maxlength">Please enter maximum 14digit number</span>
                                                </div>
                                            
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="check"class="custom-control-input" id="customCheck" required="" />
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div>
                                        <button type="submit" ng-click="loginitem()" class="btn btn-primary btn-block">Login</button>
                                        <span class="err">{{error}}</span>
                                    
</div>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php echo site_url('inventory/register');?>">Create an Account</a>
                                         <!-- <a class="small" href="register.html">Create an Account</a>-->
                                    </div>
                                </div>
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
        
                
                    $scope.loginitem= function (myform){
                      
                       $scope.error ="";
                        if(myform.$invalid){
                            
                            return false;
                        }  
                   
                    var request = $http({
                    method: "post",
                    url: "<?php echo site_url('inventory/add_login');?>",
                    data: {
                        updatetype: "check",
                    email: $scope.email,
                    password: $scope.password,
                  }
                }).then(function(response){
                 var status = response.data.status;
                  if(status == "sucess"){
            
                   window.location = "<?php echo site_url('dashboard_cntrl/index');?>";
        
                 // alert("login sucess");
               
                  }else{
                    //window.location = "<?php echo site_url('inventory/register');?>";
                          
                     $scope.error = "Incorrect email or password !";
                  }
                      });
        
        }
        });
        </script>
        