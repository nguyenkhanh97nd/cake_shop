<!-- Gọi header -->

	<?php require('site/views/commons/header.php'); ?>
	
<!-- Gọi Navbar -->
	
	<?php require('site/views/commons/navbar.php'); ?>
<!--Content -->
<?php if(isset($_SESSION['product'])){sort($_SESSION['product']);} ?>


<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">
			<h2 class="cart-name">GIỎ HÀNG</h2>
			<?php if($cart && count($cart) >0){ sort($cart); ?>


			<div class="form-cart">
				<form method="POST" action="cart">
					<table>
						<thead>
							<tr>
								<th>Xóa</th>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
							</tr>
						</thead>
						<tbody>

						<?php $i=1; $total=0 ?>
						
						<?php foreach($cart as $item){  ?>
		
							<tr class="cart-item-<?php echo $i; ?>">

								<input type="hidden" name="stt" value="<?php echo $i ?>" />

								<td class="delete-item"><input  class="delete-cart" type="text" value="<?php echo $i; ?>"></td>
								
								<input type="hidden" name="id[<?php echo $i ?>]" value="<?php echo $item['id'] ?>">

								<td><?php echo $item['name']; ?></td>
								<input type="hidden" name="name[<?php echo $i ?>]" value="<?php echo $item['name'] ?>">
								<td class="price-item"><?php echo $item['price'] ?></td>
								<input type="hidden" name="price[<?php echo $i ?>]" value="<?php echo $item['price'] ?>">
								<td class="number-item"><input type="number" value="<?php echo $item['number'] ?>" name="number[<?php echo $i ?>]"></td>

								<td class="total-item-price"><?php echo $item['price']*$item['number']; $total = $total + ($item['price']*$item['number']); ?></td>


								<?php $i++; ?>

							</tr>



						<?php  } ?>
							
									
							
						</tbody>
					</table>
					<div style="padding-top:20px">
						<span class="cart-total" >Tổng đơn hàng: <?php echo $total; ?></span>
					</div>
					<div style="padding-top:20px;">
						<input class="cart-money" type="submit" name="money-all" value="Cập nhật">
						<input class="cart-submit" type="submit" name="add-all" value="Tiến hành đặt hàng">
					</div>
				</form>

			</div>

			<?php } else { echo 'Không có sản phẩm nào'; } ?>
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->

<script type="text/javascript">
	$(document).ready(function(){
		$(".delete-cart").click(function(){
			var c = $(this).val();
			$.ajax({
				url:"./ajax/delete_cart",
				type:"post",
				data:"pos="+c,
				async:true,
				success:function(){
					window.location.reload();
				}
			});

			return true;
		})
	});
</script>

	<?php require('site/views/commons/footer.php'); ?>




</body>
</html>