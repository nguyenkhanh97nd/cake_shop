<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Products List</h2>
<div class="col-md-3"><div class="row">
<form action="admin.php/product/search/" type="GET">
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
                <th>Image</th>
                <th>Category</th>
                <th>SubCategory</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Brief</th>
                <th>Content</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($products)>0){

        $stt=0;
            foreach($products as $item){ 
            $stt++; ?>
            <tr class="table-content" align="center">
                <td><?php echo $stt; ?></td>
                <td><img style="width: 120px" src="public/images/product/<?php echo $item['image']; ?>" /></td>
                <td><?php foreach($subcategories as $subcat){
                             if($subcat['id']==$item['subcategory_id']){ $id_cate = $subcat['category_id'];}
                         }
                        foreach($categories as $cate){
                            if($cate['id']==$id_cate){
                                echo $cate['name'];
                            }
                        }
                     ?></td>
                <td><?php foreach($subcategories as $subcat){ if($subcat['id']==$item['subcategory_id']){ echo $subcat['name'];}} ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['slug'] ?></td>
                <td><?php echo $item['brief'] ?></td>
                <td><?php echo $item['content'] ?></td>
                <td  class="center"><a style="color:red" onclick="return confirm('Delete Product?');" href="admin.php/product/delete/<?php echo $item['id']; ?>"> Delete</a></td>
                <td  class="center"><a style="color:blue" href="admin.php/product/edit/<?php echo $item['id']; ?>">Edit</a></td>
                <td class="center"><a href="product/view/<?php echo $item['id'] ?>" target="_blank" style="color:green">View</a></td>
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

