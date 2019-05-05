<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	
	class CategoryModel extends MasterModel{
		
		public function admin_add_category($category){

			return parent::add_category($category);

		}

		public function admin_list_category(){

			return parent::list_category();

		}
		public function admin_list_limit($start,$limit){
			return parent::list_limit('categories',$start,$limit);
		}
		public function admin_delete_category($id){
			return parent::delete_category($id);
		}

		public function admin_find_category($id){

			return parent::find_category($id);
		}
		public function admin_edit_category($edit){

			return parent::edit_category($edit);
		}

		public function admin_search_category($keysearch){

			return parent::search_all('categories',$keysearch);
		}
		public function admin_search_category_limit($keysearch,$start,$limit){
			return parent::search_limit('categories',$keysearch,$start,$limit);
		}

	}