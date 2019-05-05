<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	
	class MemberModel extends MasterModel{
		
		public function admin_add_user($member){

			return parent::add_user($member);

		}

		public function admin_list_user(){
			return parent::list_user();
		}
		public function admin_list_limit($start,$limit){
			return parent::list_limit('users',$start,$limit);
		}

		public function admin_delete_user($id){
			return parent::delete_user($id);
		}

		public function admin_find_user($id){
			return parent::find_user($id);
		}

		public function admin_edit_user($edit){
			return parent::edit_user($edit);
		}

		public function admin_search_member($keysearch){

			return parent::search_all('users',$keysearch);
		}
		public function admin_search_member_limit($keysearch,$start,$limit){
			return parent::search_limit('users',$keysearch,$start,$limit);
		}
	}