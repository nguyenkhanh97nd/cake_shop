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
				<?php require('site/views/commons/sidebar_products.php'); ?>
			</div>

			<div class="body-right">

<?php if(!empty($row[0])){ ?>

				<div class="heading-view wow fadeInLeft">
					<div class="image-view wow fadeInLeft">
						<img src="public/images/product/<?php echo $row[0]['image'] ?>">
					</div>
					<div class="meta-view">
						<h2><?php echo $row[0]['name'] ?></h2>
						<h3><?php echo $row[0]['price'] ?> đ</h3>
						<p><?php echo $row[0]['brief'] ?></p>
						<form method="POST" action="cart" >
							<input type="hidden" name="id" value="<?php echo $row[0]['id'] ?>">
							<input type="hidden" name="name" value="<?php echo $row[0]['name'] ?>">
							<input type="hidden" name="price" value="<?php echo $row[0]['price'] ?>">
							<input type="hidden" name="number" value="1">
							<button type="submit" name="callcart" >Đặt hàng</button>
						</form>
						
					</div>
				</div>
				<div class="content-view-title wow fadeInLeft">
					<span>XEM CHI TIẾT SẢN PHẨM</span>
				</div>
				<div class="content-view wow fadeInLeft">
					<?php echo $row[0]['content'] ?>
				</div>
<?php } else { require('404.php'); } ?>

			<div class="comment-product">
				

				
                

                            <div class="well">
                                <h4>Viết bình luận ...</h4>

                   <?php if( isset( $_SESSION['user'] ) ) { ?>
                                <form role="form" action="product/view/<?php echo $row[0]['id'] ?>" method="POST">
                  
                                    <div class="form-group">
                                        <textarea class="comment-area form-control" rows="3" name="content"></textarea>
                                    </div>
                                    <button type="submit" class="submit-comment">Gửi</button>
                                </form>
          					</div>
					<?php } else { ?>	
		

								<div class="none-form-comment" style="padding-top:10px;">
									Bạn cần đăng nhập để bình luận
								</div>
					<?php } ?>

							<div class="all-comment">
	
				<?php if( $list_comment && count($list_comment) >0 ) { 
						
							 foreach($list_comment as $item_comment){ ?>
	  							<div class="comment-item">
	  								<div class="media-avatar">
	  									<span><?php echo substr($item_comment['username'],0,1) ?></span>
	  								</div>
	  								<div class="media">
	  									<div class="media-heading"><?php echo $item_comment['username'].' Ngày đăng: '.$item_comment['created_at'] ?></div>
	  									<div class="media-body">
	  										<p><?php echo $item_comment['content'] ?></p>
	  									</div>
	  								</div>

	  							</div>

	  						<?php } 

	  				 } else { ?>
	  						<div class="none-comment-item" style="padding-bottom: 20px">
	  							Chưa có bình luận nào
	  						</div>
				<?php }  ?>


	  				
  							</div>

    

                        

			</div>

			</div>
			
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>