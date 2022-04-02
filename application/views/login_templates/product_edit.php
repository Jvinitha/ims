<div ng-app="myApp" ng-controller="myCtrl"> 
<div class="container">

            <?php echo form_open_multipart('dashboard_cntrl/form_update/'.$note->id);?>
            <div class="form-group">
            <label for="text">Title:</label>
            <input type="text" ng-model="title" name = "title" class="form-control" value="<?php echo $note->title ?>">
            </div>
            <div class="form-group">
            <label for="category">Choose a category:</label>
            <select name="category" id="category">
            <option>Select</option>
            <?php foreach($categorys as $cate){
                if($cate['id'] == $note->category_id){ ?>
                    <option value="<?php echo $cate['id']; ?>" selected="selected"><?php echo $cate['category']; ?></option>
                    <?php }else{?>
                <option value="<?php echo $cate['id']; ?>"><?php echo $cate['category']; ?></option>
                <?php } 
            } ?>
            </select>
            </div>
            <div class="form-group">
            <input type="file" name="userfile" size="20" value="<?php echo $note->image ?>">
            </div>
            <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" ng-model="price" name = "price" class="form-control" value="<?php echo $note->price ?>">
            </div>
            <div class="form-group">
            <label for="decription">Description</label>
            <input type="text" ng-model="description" name = "description" class="form-control" value="<?php echo $note->description ?>">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            </form>      
                                                