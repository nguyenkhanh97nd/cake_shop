<!-- Gọi header -->

	<?php require('site/views/commons/header.php'); ?>
	
<!-- Gọi Navbar -->
	
	<?php require('site/views/commons/navbar.php'); ?>


<!--Content -->
<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">
			<div class="body-left">
				<?php require('site/views/commons/sidebar_news.php'); ?>
			</div>

			<div class="body-right">

<?php if(!empty($row[0])){ ?>
				<div class="heading-view wow fadeInLeft">
					<div class="image-view">
						<img src="public/images/news/<?php echo $row[0]['image'] ?>">
					</div>
					<div class="meta-view">
						<h2><?php echo $row[0]['name'] ?></h2>
						<span>Đăng bởi: <font color="#df72a7"><?php echo $row[0]['author'] ?></font> | Ngày: <?php echo date("d/m/Y",strtotime($row[0]['date'])) ?></span>
						<p><?php echo $row[0]['brief'] ?></p>
					</div>
				</div>
				<div class="content-view-title wow fadeInLeft">
					<span>XEM CHI TIẾT</span>
				</div>
				<div class="content-view wow fadeInLeft">
					<?php echo $row[0]['content'] ?>
				</div>
<?php } else require('404.php'); ?>


			</div>
			
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>