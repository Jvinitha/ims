<div ng-app="myApp" ng-controller="myCtrl"> 
<table class="table table-bordered">
        <tr>
        <th>Sno.</th>
        <th>Title</th>
        <th>Category</th>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
        </tr>
        <tr ng-repeat="x in names">
            <td>{{$index+1}}</td>
            <td>{{ x.title}}</td>
            <td>{{ x.category}}</td>
            <td><img src="<?php echo base_url('assets/uploads/');?>{{ x.image}}" height="100"></td>
            <td>{{ x.price }}</td>
            <td>{{ x.description }}</td>
            <td><a href="<?php echo site_url('dashboard_cntrl/form_edit/');?>{{x.id}}">Edit</a><a href="<?php echo site_url('dashboard_cntrl/form_delete/');?>{{x.id}}">Delete</a></td>
        </tr>
</table>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    //alert(5);
  $http.get("<?php echo site_url('dashboard_cntrl/product_add');?>")
       .then(function(response) {
       $scope.names = response.data;
       });
    });

</script>


