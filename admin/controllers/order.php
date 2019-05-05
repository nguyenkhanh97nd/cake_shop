<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	admin/controllers/category.php
	 */
	require('admin/models/order.php');
	require('admin/models/paginate.php');
	class OrderController extends OrderModel{

		public function waiting(){

			$rows = parent::admin_order_detail_waiting();


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$order_detail = parent::admin_order_detail_waiting_limit($start,$limit);


			require('admin/views/order/waiting.php');
		}
		public function success(){
			$rows = parent::admin_order_detail_success();

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$order_detail = parent::admin_order_detail_success_limit($start,$limit);
			require('admin/views/order/success.php');
		}

		public function postSuccess($id){
			$check = parent::admin_success_order($id);
			if($check == TRUE){
				echo "<script>alert('Move Success Order')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../success'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Move Order')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../waiting'
					      </script>";
			}
		}

		public function postPending($id){
			$check = parent::admin_pending_order($id);
			if($check == TRUE){
				echo "<script>alert('Move Pending Order')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../waiting'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Move Order')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../success'
					      </script>";
			}
		}
		public function view($id){

			$order_detail = parent::admin_find_order_detail($id);
			$product = parent::admin_find_product_order($order_detail['product_id']);
			$info = parent::admin_find_info_order($order_detail['order_id']);

			require('admin/views/order/view.php');

		}

	}