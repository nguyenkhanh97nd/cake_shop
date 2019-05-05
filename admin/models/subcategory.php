<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	
	class SubcategoryModel extends MasterModel{

		public function admin_add_subcategory($subcategory){
			return parent::add_subcategory($subcategory);
		}

		public function admin_list_subcategory(){

			return parent::list_subcategory();

		}
		public function admin_list_limit($start,$limit){
			return parent::list_limit('sub_categories',$start,$limit);
		}

		
		public function get_list_category(){
			return parent::list_category();
		}

		public function admin_delete_subcategory($id){
			return parent::delete_subcategory($id);
		}

		public function admin_find_subcategory($id){

			return parent::find_subcategory($id);
		}

		public function admin_edit_subcategory($edit){

			return parent::edit_subcategory($edit);
		}

		public function admin_search_subcategory($keysearch){

			return parent::search_all('sub_categories',$keysearch);
		}
		public function admin_search_subcategory_limit($keysearch,$start,$limit){
			return parent::search_limit('sub_categories',$keysearch,$start,$limit);
		}

	}