<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/Home.php
	 */
	
	class FeedbackModel extends MasterModel{
		public function admin_list_feedback(){

			return parent::list_feedback();

		}
		public function admin_list_limit($start,$limit){
			return parent::list_limit('feedback',$start,$limit);
		}
		public function admin_delete_feedback($id){
			return parent::delete_feedback($id);
		}
	}