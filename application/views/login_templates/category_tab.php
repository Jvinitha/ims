<div ng-app="myApp" ng-controller="myCtrl"> 
<table class="table table-bordered">
        <tr>
        <th>Sno.</th>
        <th>Category</th>
        </tr>
        <tr ng-repeat="x in names">
            <td>{{$index+1}}</td>
            <td>{{ x.category}}</td>
            <td><a href="<?php echo site_url('dashboard_cntrl/category_edit/');?>{{x.id}}">Edit</a><a href="<?php echo site_url('dashboard_cntrl/category_delete/');?>{{x.id}}">Delete</a></td>
        </tr>
</table>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    //alert(5);
  $http.get("<?php echo site_url('dashboard_cntrl/categorytab_add');?>")
       .then(function(response) {
       $scope.names = response.data;
       });
    });

</script>