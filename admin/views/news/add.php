<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>News Add</h2>
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
    <form action="admin.php/news/postAdd" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category" id="category">
                <option></option>
                <?php foreach($category as $cate){ ?>
                   <option value="<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></option>             
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Sub Category</label>
            <select class="form-control" name="subcategory" id="subcategory"></select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Name News">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" name="txtSlug" placeholder="Slug News">
        </div>
        <div class="form-group">
            <label>Brief</label>
            <textarea class="form-control" rows="3" name="txtBrief"></textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control ckeditor" rows="5" name="txtContent" id="demo"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control"/>
        </div>
        
        <button type="submit" name="add_news" class="btn btn-default">Add</button>
    
    </form>
</div>

<?php
	require('admin/views/commons/footer.php');

