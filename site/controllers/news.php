<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/product.php
	 */
	require('site/models/paginate.php');
	require('site/models/news.php');
	class NewsController extends NewsModel{

		public function index(){
			$subcategory = parent::__construct();

			$rows = parent::get_all();


			//Phân trang
			$paginate = new PaginateModel;
			$limit = 6;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$result_paginate = parent::get_all_with_limit($start,$limit);


			require('site/views/news/index.php');
		}

		public function view($id){
			$subcategory = parent::__construct();

			$id = (int)$id;
			$row = parent::get_by_id($id);
			require('site/views/news/view.php');
		}

		public function list_all($subcategory_id){
			$subcategory = parent::__construct();

			$subcategory_id = (int)$subcategory_id;
			$rows = parent::get_list($subcategory_id);


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 6;
			$start = $paginate->findStart($limit);
			$count = count($rows[0]);
			$pages = $paginate->findPages($count,$limit);

			$result_paginate = parent::get_list_with_limit($start,$limit,$subcategory_id);

			require('site/views/news/list.php');
		}
	}