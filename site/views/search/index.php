<!-- Gọi header -->

	<?php require('site/views/commons/header.php'); ?>
	
<!-- Gọi Navbar -->
	
	<?php require('site/views/commons/navbar.php'); ?>
	<link rel="stylesheet" type="text/css" href="public/stylesheet/products_style.css">
<!--Content -->
<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">
			<div class="body-left">
				<?php require('site/views/commons/sidebar_search.php'); ?>
			</div>
			<div class="body-right">

				<div id="phuong-showsp">
					<h2 id="phuong-title">KẾT QUẢ TÌM KIẾM: <font color="#f1004c"><?php echo $_SESSION['search']; ?></font></h2>
					
						<?php if(isset($rows)){ ?>
						<?php foreach($result_paginate as $item){ ?>
						<div class="category-product-wrapper wow fadeInLeft">
							<div class="category-product-content">
								<div class="category-product-image">
									<a href="product/view/<?php echo $item['id']; ?>"><img src="public/images/product/<?php echo $item['image']; ?>"/></a>
								</div>
								<div class="category-product-info">
									<span class="category-product-name"><?php echo $item['name']; ?></span>
									<span class="category-product-price"><?php echo $item['price']; ?></span>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php } else { ?>

							<p class="error-search wow fadeInLeft" style="padding:20px 0px;font-size:20px"><font color="#333">Không tìm thấy: </font><font color="blue"><?php echo $_GET['s'] ?></font></p>


					<?php		} ?>

				</div>
				
				<?php $url = explode('page=',$_GET['s']); 
						if(!isset($url[1])){
							$curPage = 1;
						}
						else{
							$curPage = intval($url[1]);
						}
				 ?>

				<?php $pageList = $paginate->getList($curPage, $pages); ?>

					<div class="pagination" style="clear:both">
						<ul class="paginate">
							<?php echo $pageList;  ?>
						</ul>
					</div>

			</div>

		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>