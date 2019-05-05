<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
 	 * @filesource 		site/models/user.php
	 */
	
	class UserModel extends MasterModel{
		
		public function save_user($user){

			return parent::add_user($user);

		}

		public function check_login($user){

			return parent::check_user($user);

		}

		public function user_order($user){
			return parent::all_user_order($user);
		}

		public function user_update_info($data) {
			return parent::user_update($data);
		}

		public function user_update_avatar($data) {
			return parent::user_update($data);
		}
	}
