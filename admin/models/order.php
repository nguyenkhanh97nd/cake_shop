<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	
	class OrderModel extends MasterModel{

		public function admin_order_detail_waiting(){
			return parent::order_detail_waiting();
		}
		public function admin_order_detail_waiting_limit($start,$limit){
			return parent::order_detail_waiting_limit($start,$limit);
		}

		public function admin_order_detail_success(){
			return parent::order_detail_success();
		}
		public function admin_order_detail_success_limit($start,$limit){
			return parent::order_detail_success_limit($start,$limit);
		}

		public function admin_success_order($id){
			return parent::success_order($id);
		}

		public function admin_pending_order($id){
			return parent::pending_order($id);
		}



		public function admin_find_order_detail($id){
			return parent::find_order_detail($id);
		}
		public function admin_find_product_order($id){
			return parent::find_product_order($id);
		}
		public function admin_find_info_order($id){
			return parent::find_info_order($id);
		}

	}