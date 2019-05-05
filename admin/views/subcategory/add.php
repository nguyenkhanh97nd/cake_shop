<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>SubCategory Add</h2>


<div class="content-section" style="padding-bottom:120px">
  <form action="admin.php/subcategory/add" method="POST">

        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtCateName" placeholder="Name Sub Category" />
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug" />
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="numParent">
               
                <?php foreach($category as $item){ ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Descriptions</label>
            <textarea class="form-control" rows="3" name="txtDescription"></textarea>
        </div>
        <button type="submit" name="add_subcategory" class="btn btn-default">Add</button>
     
    </form>
</div>

<?php





	require('admin/views/commons/footer.php');

