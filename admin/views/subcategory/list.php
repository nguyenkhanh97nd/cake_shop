<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>SubCategories List</h2>
<div class="col-md-3"><div class="row">
<form action="admin.php/subcategory/search/" type="GET">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="s">
  </div>
</form>
</div></div>

<!-- /.col-lg-12 -->
    <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Number</th>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Descriptions</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        if(count($subcategories)>0){

        $stt=0;
            foreach($subcategories as $item){
            $stt++; ?>
            <tr class="table-content" align="center">
                <td><?php echo $stt ?></td>
                <td><?php echo $item['id'] ?></td>
                <td><?php foreach($categories as $cat){ if($cat['id']==$item['category_id']){ echo $cat['name'];}} ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['slug'] ?></td>
                <td><?php echo $item['description'] ?></td>
                <td class="center"><a style="color:red" onclick="return confirm('Delete Sub Category?');" href="admin.php/subcategory/delete/<?php  echo $item['id'] ?>"> Delete</a></td>
                <td class="center"><a style="color:blue" href="admin.php/subcategory/edit/<?php  echo $item['id'] ?>">Edit</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

                <?php $pageList = $paginate->getList($_GET['page'], $pages); ?>

                    <div class="pagination_admin" style="clear:both">
                        <ul class="paginate_admin">
                            <?php echo $pageList;  ?>
                        </ul>
                    </div>

<?php } else{ echo "<div class='col-md-12'><div class='row'><p>Not found.</p></div></div>"; } ?>


<?php
    
	require('admin/views/commons/footer.php');

