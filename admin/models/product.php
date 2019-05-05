<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	
	class ProductModel extends MasterModel{
		
		public function admin_list_category(){
			return parent::list_category();
		}
		public function admin_list_subcategory(){
			return parent::list_subcategory();
		}


		public function admin_post_product($product){
			return parent::post_product($product);
		}

		public function admin_list_product(){
			return parent::list_product();
		}
		public function admin_list_limit($start,$limit){
			return parent::list_limit('products',$start,$limit);
		}

		public function admin_delete_product($id){
			return parent::delete_product($id);
		}

		public function admin_find_product($id){

			return parent::find_product($id);
		}

		public function admin_edit_product($edit){

			return parent::edit_product($edit);
		}
		public function admin_list_comment_product($id){
			return parent::list_comment_product($id);
		}

		public function admin_search_product($keysearch){

			return parent::search_all('products',$keysearch);
		}
		public function admin_search_product_limit($keysearch,$start,$limit){
			return parent::search_limit('products',$keysearch,$start,$limit);
		}
		public function admin_delete_comment($id){
			return parent::delete_comment($id);
		}
	}