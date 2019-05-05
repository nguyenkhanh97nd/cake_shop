<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Member Edit</h2>

<div class="content-section" style="padding-bottom:120px">
  <form action="admin.php/member/postEdit/<?php echo $user['id'] ?>" method="POST">
    
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="txtNameUser" placeholder="Name" value="<?php echo $user['name'] ?>" />
    </div>

    <div class="form-group">
        <label>Username</label>
        <input class="form-control" name="txtUser" placeholder="Username" value="<?php echo $user['username'] ?>" disabled/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="txtPass" placeholder="Password" />
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="txtRePass" placeholder="Confirm Password" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="txtEmail" placeholder="Email" value="<?php echo $user['email'] ?>" disabled/>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="txtAddress" placeholder="Address" value="<?php echo $user['address'] ?>" />
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="txtPhone" placeholder="Phone" value="<?php echo $user['phone'] ?>" />
    </div>
    <div class="form-group">
        <label>Level</label>
            <label class="radio-inline">
                <input name="level" value="1"  type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="level" value="0" checked="" type="radio">Member
            </label>
    </div>
    <div class="form-group">
        <label>Status</label>
            <label class="radio-inline">
                <input name="status" value="1" checked="" type="radio">Active
            </label>
            <label class="radio-inline">
                <input name="status" value="0" type="radio">Disable
            </label>
    </div>
    <button type="submit" class="btn btn-default" name="post_edit">Edit</button>


</form>
</div>

<?php


	require('admin/views/commons/footer.php');

