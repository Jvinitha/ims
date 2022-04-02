<div ng-app="myApp" ng-controller="myCtrl"> 
<div class="container">
<?php //var_dump($categorys);exit;?>
            <?php echo form_open_multipart('dashboard_cntrl/form_add');?>
            <div class="form-group">
            <label for="text">Title:</label>
            <input type="text" ng-model="title" name = "title" class="form-control">
            </div>
            <div class="form-group">
            <label for="category">Choose a category:</label>
            <select name="category" id="category">
            <option>Select</option>
            <?php foreach ( $categorys as $cate ){?>
                <option value="<?php echo $cate['id']; ?>"><?php echo $cate['category']; ?></option>
                <?php }?>
            </select>
            </div>
            <div class="form-group">
            <input type="file" name="userfile" size="20" />
            </div>
            <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" ng-model="price" name = "price" class="form-control">
            </div>
            <div class="form-group">
            <label for="decription">Description</label>
            <input type="text" ng-model="description" name = "description" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            </form>      
                                                