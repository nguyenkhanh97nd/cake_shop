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
		public function admin_list_user(){
			return parent::list_user();
		}
		public function admin_list_product(){
			return parent::list_product();
		}
		public function admin_list_news(){
			return parent::list_news();
		}
		public function admin_list_comment(){
			return parent::list_comment();
		}
		public function admin_list_order(){
			return parent::list_order();
		}
		public function admin_list_customer(){
			return parent::list_customer();
		}
	}