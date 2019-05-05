<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
 * @filesource 		site/models/product.php
	 */
	
	class SearchModel extends MasterModel{
		public function __construct(){
			return parent::get_all_from('sub_categories');
		}


		public function get_record_search($keysearch){
			return parent::search_record($keysearch);
		}


		public function get_all_search_with_limit($start,$limit, $keysearch){
			return parent::search_record_with_limit($start,$limit,$keysearch);
		}

	}