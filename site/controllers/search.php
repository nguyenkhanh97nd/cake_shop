<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/product.php
	 */
	require('site/models/search.php');
	require('site/models/paginate.php');
	class SearchController extends SearchModel{

		public function keyword($key){
			
			$subcategory = parent::__construct();

			$rows = parent::get_record_search($key);



			//Phần trang
			$paginate = new PaginateModel;
			$limit = 10;
			$start = $paginate->findStart($limit);
			$count = count($rows[0]);
			$pages = $paginate->findPages($count,$limit);

			$result_paginate = parent::get_all_search_with_limit($start,$limit, $key);



			require('site/views/search/index.php');
		}
	}