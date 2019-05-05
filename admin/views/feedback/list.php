<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Feedback List</h2>

<!-- /.col-lg-12 -->
    <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Number</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Content</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($feedbacks)>0){
        $stt=0;
            foreach($feedbacks as $item){
            $stt++; ?>
            <tr class="table-content" align="center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['content'] ?></td>
                <td class="center"><a style="color:red" onclick="return confirm('Delete Category?');" href="admin.php/feedback/delete/<?php echo $item['id'] ?>"> Delete</a></td>
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

