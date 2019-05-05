<?php 


    require('admin/views/commons/header.php');
    require('admin/views/commons/sidebar_left.php');
    require('admin/views/commons/header_right.php');
?>

<h2>Members List</h2>
<div class="col-md-3"><div class="row">
<form action="admin.php/member/search/" type="GET">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="s">
  </div>
</form>
</div></div>

<!-- /.col-lg-12 -->
    <table class="table table-bordered">
    <thead>
        <tr align="center">
            <th>Number</th>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Level</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        

        <?php 
        if(count($member)>0){

        $stt = 0;
            foreach($member as $item){
            $stt++ ?>
        <tr class="table-content" align="center">
            <td><?php echo $stt; ?></td>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['username'] ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['phone'] ?></td>
            <td><?php echo $item['address'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td>
                <?php

                    if($item['level'] == 1){
                        echo 'Admin';
                    }
                    else{
                        if($item['level'] == 0){

                            echo 'Member';

                        }
                        else{
                            echo 'Unknown';
                        }
                    }

                ?>
                
            </td>
            <td>
                <?php
                    if($item['status']==1){
                        echo 'Active';
                    }
                    else{
                        echo 'Disable';
                    }
                ?>
            </td>
            <td class="center"><a style="color:red;" onclick="return confirm('Delete Member?')" href="admin.php/member/delete/<?php echo $item['id'] ?>"> Delete</a></td>
            <td class="center"><a style="color:blue" href="admin.php/member/edit/<?php echo $item['id'] ?>">Edit</a></td>
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

