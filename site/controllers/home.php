<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/home.php
	 */
	require('site/models/home.php');
	class HomeController extends HomeModel{
		public function index(){
			$homeProdutsMostly = parent::get_all_product_new();
			$homeNewNews = parent::get_all_news_new();
			$count_customer = parent::count_customer();

			$order_detail = parent::count_order_product();
			$count_order_product = 0;
			foreach( $order_detail as $item ){
				$count_order_product = $count_order_product + $item['number_product'];
			}


			require('site/views/home/index.php');

		}

	}