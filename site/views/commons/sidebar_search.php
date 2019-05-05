<h2 class="title-category">DANH MỤC TÌM KIẾM</h2>
<ul class="list-category wow fadeInLeft">

	<?php foreach($subcategory as $subcate){ ?>
		<h3><a href="<?php if($subcate['id']==4){ echo 'news'; } else{ echo 'product'; } ?>/list_all/<?php echo $subcate['id'] ?>" title="<?php echo $subcate['name'] ?>"><li class="list-cat-menu"><?php  echo $subcate['name'] ?></li></a></h3>
	<?php } ?>

</ul>