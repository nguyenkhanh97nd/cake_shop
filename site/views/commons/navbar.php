<header>
	<!--Container header -->
	<div class="container">
		<!--Row header -->
		<div class="row">

			<!--Logo -->
			<div class="main-logo">
				<h1><a href="">Cake Shop</a></h1>
			</div>

			<!--Main Nav -->
			<nav>
				<ul class="menu-ul">
					<li><a href="" title="Trang chủ"><span>Trang chủ</span></a></li>
					<li><a href="about" title="Giới thiệu"><span>Giới thiệu</span></a></li>
					<li><a href="product" title="Sản phẩm"><span>Sản phẩm</span></a></li>
					<li><a href="news" title="Tin tức"><span>Tin tức</span></a></li>
					<li><a href="contact" title="Liên hệ"><span>Liên hệ</span></a></li>


					<?php if(!isset($_SESSION['user'])){ ?>
						<li><a href="user/register" title="Đăng ký"><span>Đăng ký</span></a></li>
						<li><a href="user/login" title="Đăng nhập"><span>Đăng nhập</span></a></li>
					<?php } else { ?>

						<li><a href="user" title="<?php echo $_SESSION['user']['name'] ?>"><span><?php echo $_SESSION['user']['name'] ?></span></a></li>

						<li><a href="user/logout" title="Đăng xuất"><span>Đăng xuất</span></a></li>
						
					<?php } ?>


					<li><a href="cart" title="Giỏ hàng" ><span class="cart-nav">Giỏ hàng</span></a></li>
					<div class="search-form">
						<div class="menu-search">
							<form method="get" action="search/keyword/" role="search"><input autocomplete="off" placeholder="Nhập tìm kiếm..." type="text" name="s" value=""></form>
						</div>
					</div>
				</ul>
			</nav><!--End nav -->

		</div><!--End row-->
	</div><!--End container -->
</header>