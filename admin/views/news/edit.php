<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>News Edit</h2>
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

<div class="content-section" style="padding-bottom:120px">
    <form action="admin.php/news/postEdit/<?php echo $news['id'] ?>" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category" id="category">
                <option></option>
                <?php foreach($category as $cate){ ?>
                   <option value="<?php echo $cate['id']; ?>"
                        <?php 

                        foreach($subcategory as $item){
                            if($item['id'] == $news['subcategory_id']){
                                $id_category = $item['category_id'];
                            }
                        }
                        if($cate['id']== $id_category){
                            echo 'selected';
                        }

                        ?>
                
                   ><?php echo $cate['name']; ?></option>             
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Sub Category</label>
            <select class="form-control" name="subcategory" id="subcategory">
                <option value="<?php echo $news['subcategory_id'] ?>"><?php foreach($subcategory as $item){ if($item['id']==$news['subcategory_id']){ echo $item['name']; } } ?></option>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Name News" value="<?php echo $news['name'] ?>">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug News" value="<?php echo $news['slug'] ?>">
        </div>
        <div class="form-group">
            <label>Brief</label>
            <textarea class="form-control" rows="3" name="txtBrief"><?php echo $news['brief'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control ckeditor" rows="5" name="txtContent" id="demo"><?php echo $news['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" />
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
        <button type="submit" name="edit_news" class="btn btn-default">Edit</button>

    </form>
</div>

<?php
	require('admin/views/commons/footer.php');

