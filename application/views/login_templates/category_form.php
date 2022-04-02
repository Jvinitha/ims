<div ng-app="myApp" ng-controller="myCtrl"> 
<div class="container">
<?php //var_dump($categorys);exit;?>
            <?php echo form_open_multipart('dashboard_cntrl/category_add');?>
            <div class="form-group">
            <label for="text">category</label>
            <input type="text" name = "category" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
