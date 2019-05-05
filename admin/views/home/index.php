<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<div class="row tile-count" style="padding-top:20px">
            <div class="col-md-2 col-sm-4 col-xs-6 tile-stats-count">
              <span class="count-top"><span class="glyphicon glyphicon-user"></span> Total Users</span>
              <div class="count"><?php echo count($users); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile-stats-count">
              <span class="count-top"><span class="glyphicon glyphicon-time"></span> Total News</span>
              <div class="count"><?php echo count($news); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile-stats-count">
              <span class="count-top"><span class="glyphicon glyphicon-user"></span> Total Products</span>
              <div class="count"><?php echo count($products); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile-stats-count">
              <span class="count-top"><span class="glyphicon glyphicon-user"></span> Total Comments</span>
              <div class="count"><?php echo count($comments); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile-stats-count">
              <span class="count-top"><span class="glyphicon glyphicon-folder-close"></span> Total Orders</span>
              <div class="count"><?php echo count($orders); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count-top"><span class="glyphicon glyphicon-signal"></span> Total Customers</span>
              <div class="count"><?php echo count($customers) ?></div>
            </div>
</div>

<?php



	require('admin/views/commons/footer.php');

