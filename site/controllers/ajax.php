<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/about.php
	 */
	class AjaxController{
		public function delete_cart(){
			if(isset($_POST['pos'])){
				$position = $_POST['pos'];
				unset($_SESSION['product'][$position-1]);
			}
			else{
				require('404.php');
			}
		}
	}
?>