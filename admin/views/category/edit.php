<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Category Edit</h2>


<div class="content-section" style="padding-bottom:120px">
  <form action="admin.php/category/postEdit/<?php echo $category['id'] ?>" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtCateName" placeholder="Name Category" value="<?php echo $category['name'] ?>" />
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug Category" value="<?php echo $category['slug'] ?>" />
        </div>
        <div class="form-group">
            <label>Descriptions</label>
            <textarea class="form-control" rows="3" name="txtDescription"><?php echo $category['description'] ?></textarea>
        </div>
        <div class="form-group">
        <label>Status</label>
            <label class="radio-inline">
                <input name="status" value="1" checked="" type="radio">Active
            </label>
            <label class="radio-inline">
                <input name="status" value="0" type="radio">Disable
            </label>
        </div>
        <button type="submit" name="edit_category" class="btn btn-default">Edit</button>

    </form>
    
</div>

<?php

	require('admin/views/commons/footer.php');

