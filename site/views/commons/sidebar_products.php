<h2 class="title-category">DANH MỤC SẢN PHẨM</h2>
<ul class="list-category wow fadeInLeft">

	<?php foreach($subcategory as $subcate){ ?>
		<h3><a href="product/list_all/<?php echo $subcate['id'] ?>" title="<?php echo $subcate['name'] ?>"><li class="list-cat-menu"><?php  echo $subcate['name'] ?></li></a></h3>
	<?php } ?>

</ul>