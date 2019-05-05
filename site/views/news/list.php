<!-- Gọi header -->

    <?php require('site/views/commons/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/stylesheet/news.css">
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
                    <div id="binh-showsp">
                        <h2 class="binh-title-tintuc" style = "text-transform: uppercase;"><?php echo $rows[1]['name'] ?></h2>
                            <?php  foreach ($result_paginate as $newscontent) { ?>
                                 <div class="binh-tintuc-wrapper wow fadeInLeft">
                                    <div class="binh-tintuc-image">
                                         <a href="news/view/<?php echo $newscontent['id']; ?>""> <img src="public/images/news/<?php echo $newscontent['image'] ?>"></a>
                                    </div>
                                    <div class="binh-tintuc-meta"> 
                                            <h2 class="binh-tintuc-header"><a href="news/view/<?php echo $newscontent['id']; ?>""><?php echo $newscontent['name'] ?></a></h2>
                                            <span>Đăng bởi: <font color="#df72a7"><?php echo $newscontent['author'] ?></font> | Ngày: <?php echo date("d/m/Y",strtotime($newscontent['date'])) ?></span>
                                            <p><?php echo $newscontent['brief'] ?></p>
                                            <a href="news/view/<?php echo $newscontent['id']; ?>"" class="binh-tintuc-view">Xem thêm</a>
                                    </div>
                                 </div>
                            <?php } ?>

                    </div>
                    
                    <?php $pageList = $paginate->getList($_GET['page'], $pages); ?>

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