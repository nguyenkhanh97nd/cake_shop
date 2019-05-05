<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Product Edit</h2>
<script type="text/javascript">
    $(document).ready(function(){

        $('#category').change(function(){
            var cate = $("#category option:selected").val();
            $.ajax({
                url: 'admin.php/ajax/get_subcategory',
                type: 'post',
                data: {
                    cate: cate,
                },
                async:true,
                dataType:'html',
                success:function(result){
                    $("#subcategory").html(result);
                }
            });
            return false;
        });

    });
</script>


<div class="content-section" style="padding-bottom:50px">
    <form action="admin.php/product/postEdit/<?php echo $product['id'] ?>" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category" id="category">
                <option></option>
                <?php foreach($category as $cate){ ?>
                   <option value="<?php echo $cate['id']; ?>"
                    
                    <?php 

                        foreach($subcategory as $item){
                            if($item['id'] == $product['subcategory_id']){
                                $id_category = $item['category_id'];
                            }
                        }
                        if($cate['id']== $id_category){
                            echo 'selected';
                        }
    
                   ?>><?php echo $cate['name']; ?></option>             
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Sub Category</label>
            <select class="form-control" name="subcategory" id="subcategory">
                <option value="<?php echo $product['subcategory_id'] ?>"><?php foreach($subcategory as $item){ if($item['id']==$product['subcategory_id']){ echo $item['name']; } } ?></option>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Name Product" value="<?php echo $product['name'] ?>">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="numPrice" placeholder="Price Product" value="<?php echo $product['price'] ?>">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug Product" value="<?php echo $product['slug'] ?>">
        </div>
        <div class="form-group">
            <label>Brief</label>
            <textarea class="form-control" rows="3" name="txtBrief"><?php echo $product['brief'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control ckeditor" rows="5" name="txtContent" id="demo"><?php echo $product['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control"/>
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
        <button type="submit" name="edit_product" class="btn btn-default">Edit</button>
 
    </form>
</div>
<h2>Comments</h2>
<table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Number</th>
                <th>Id</th>
                <th>Id user</th>
                <th>Content</th>
                <th>Date</th>
                <th>Remove</th>

            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($comments)>0){

        $stt=0;
            foreach($comments as $item){ 
            $stt++; ?>
            <tr class="table-content" align="center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['id_user'] ?></td>
                <td><?php echo $item['content'] ?></td>
                <td><?php echo $item['created_at'] ?></td>
                <td  class="center"><a style="color:red" onclick="return confirm('Delete Comment?');" href="admin.php/product/deleteComment/<?php echo $item['id']; ?>"> Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
               

<?php } else{ echo 'No comment'; } ?>


<?php

	require('admin/views/commons/footer.php');

