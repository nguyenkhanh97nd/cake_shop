<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	class HomeModel extends MasterModel{
		public static function get_all_product_new(){
			return  parent::get_all_from('products',array('offset'=>'0','limit'=>'8','order'=>'DESC'));
		}

		public static function get_all_news_new(){
			return parent::get_all_from('news',array('offset'=>'0','limit'=>'2','order'=>'DESC'));
		}

		public static function count_customer(){

			$count = parent::get_all_from('orders');
			return count($count);

		} 

		public static function count_order_product(){

			$order_detail = parent::get_all_from('order_detail');
			return $order_detail;
		}


	}