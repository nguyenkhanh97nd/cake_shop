<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Category Add</h2>


<div class="content-section" style="padding-bottom:120px">
  <form action="admin.php/category/add_new" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtCateName" placeholder="Name Category" />
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug Category" />
        </div>
        <div class="form-group">
            <label>Descriptions</label>
            <textarea class="form-control" rows="3" name="txtDescription"></textarea>
        </div>
        <button type="submit" name="add_category" class="btn btn-default">Add</button>

    </form>
    
</div>

<?php





	require('admin/views/commons/footer.php');

