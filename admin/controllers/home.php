<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/home.php
	 */
	require('admin/models/home.php');
	class HomeController extends HomeModel{
		public function index(){
			$users = parent::admin_list_user();
			$products = parent::admin_list_product();
			$news = parent::admin_list_news();
			$comments = parent::admin_list_comment();
			$orders = parent::admin_list_order();
			$customers = parent::admin_list_customer();
			require('admin/views/home/index.php');

		}

	}