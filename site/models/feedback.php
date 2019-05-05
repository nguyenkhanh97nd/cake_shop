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
		public function admin_post_feedback($feedback){

			return parent::post_feedback($feedback);

		}
	}