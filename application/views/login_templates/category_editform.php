<div ng-app="myApp" ng-controller="myCtrl"> 
<div class="container">

            <?php echo form_open_multipart('dashboard_cntrl/category_update/'.$mynote->id);?>
            <div class="form-group">
            <label for="text">Category</label>
            <input type="text" name = "category" class="form-control" value="<?php echo $mynote->category ?>">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            </form>