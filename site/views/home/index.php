
<?php require('site/views/commons/header.php'); ?>
	
<!-- Gọi Navbar -->
	
	<?php require('site/views/commons/navbar.php'); ?>

<!--Index Content -->

<body>





<script type="text/javascript">

	//Background images
	function slideSwitch() {

			// Lấy giá trị của background đang được active
		    var $active = $('#background-index img.active');

		    // Nếu không có image nào đc active(length=0) thì lấy image cuối cùng
		    if ( $active.length == 0 ) $active = $('#background-index img:last');

		    // Nếu Sau image không còn image nào nữa(length=0) thì sẽ gọi về image đầu tiên
		    var $next =  $active.next().length ? $active.next() : $('#background-index img:first');

		    // Thêm tên class vào trong image đã được active gần nhất
		    $active.addClass('last-active');

		    // Thêm css, hiệu ứng cho image tiếp theo. Đặt class cho image tiếp theo là active. Đồng thời remove class active và last-active đã thêm vào image trước. 
		    $next.css({opacity: 0.0})
		        .addClass('active')
		        .animate({opacity: 1.0}, 1000, function() {
		            $active.removeClass('active last-active');
		        });
		}
	//Thực hiện gọi hàm Background Images
	$(function() {
		setInterval( "slideSwitch()", 5000 );
	});
</script>

<!--BackGround Index -->
<div id="background-index">
    <img src="public/images/home/slider-1.jpg" alt="" class="active" />
    <img src="public/images/home/slider-2.jpg" alt="" />
</div>




<!--LOGO website index -->
		<?php require('section_logo-cake.php') ?>


<!-- Giới thiệu chung về Shop -->
		<?php require('section_about-shop.php'); ?>


<!--Thống kê trang web -->
		<?php require('section_statistic-cake.php'); ?>


<!-- Mẫu bán chạy -->
		<?php require('section_mostly-cake.php'); ?>



<!--Liên Hệ đặt bánh-->
		<?php require('section_contact.php'); ?>



<!-- Kinh Nghiệm làm bánh -->
		<?php require('section_news-cake.php'); ?>



<!-- Dụng cụ làm bánh -->
		<?php require('section_product-equipment.php'); ?>

<!-- Đăng kí nhận thông tin qua Email-->
		<?php require('section_register-email.php'); ?>



<!--Giới thiệu về feedback -->
		<?php require('section_customer-feedback.php'); ?>


<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>
<script src="https://www.izwebz.com/wp-content/uploads/2014/08/wow.min_.js"></script>
<script>
 new WOW().init();
</script>




</body>
</html>