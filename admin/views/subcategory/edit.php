<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>SubCategory Edit</h2>


<div class="content-section" style="padding-bottom:120px">
  <form action="admin.php/subcategory/postEdit/<?php echo $subcategory['id'] ?>" method="POST">

        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtCateName" placeholder="Name Sub Category" value="<?php echo $subcategory['name'] ?>"   />
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug" value="<?php echo $subcategory['slug'] ?>" />
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="numParent">
               
                <?php foreach($category as $item){ ?>
                    <option value="<?php echo $item['id'] ?>" <?php if($item['id'] == $subcategory['category_id'] ){echo 'selected'; } ?> ><?php echo $item['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Descriptions</label>
            <textarea class="form-control" rows="3" name="txtDescription"><?php echo $subcategory['description'] ?></textarea>
        </div>
        <div class="form-group">
        <label>Status</label>
            <label class="radio-inline">
                <input name="status" value="1" checked type="radio">Active
            </label>
            <label class="radio-inline">
                <input name="status" value="0" type="radio">Disable
            </label>
        </div>
        <button type="submit" name="edit_subcategory" class="btn btn-default">Edit</button>
      
    </form>
</div>

<?php
	require('admin/views/commons/footer.php');

