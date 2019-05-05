<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
 * @filesource 		site/models/product.php
	 */
	class NewsModel extends MasterModel{

		public function __construct(){
			return parent::get_all_from('sub_categories',array('where'=>'category_id = 2'));
		}

		public static function get_all(){
			return parent::get_all_from('news');
		}
		public static function get_by_id($id){
			return parent::get_a_record_by_id('news',$id);
		}

		public static function get_list($subcategory_id){
			return parent::get_list_by_category('news',$subcategory_id);
		}


		public static function get_all_with_limit($start,$limit){
			return parent::get_all_from('news',array('offset'=>$start,'limit'=>$limit));
		}

		public static function get_list_with_limit($start,$limit,$subcategory_id){
			return parent::get_all_from('news',array( 'offset'=>$start,'limit'=>$limit,'where'=>'subcategory_id = '.$subcategory_id ));
		}
	}