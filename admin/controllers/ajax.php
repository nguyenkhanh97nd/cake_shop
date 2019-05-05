<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	admin/controllers/category.php
	 */
	class AjaxController extends MasterModel{

		
		public function get_subcategory(){
			if(isset($_POST['cate'])){
				$cate = $_POST['cate'];
				$subcategory = parent::list_subcategory_of($cate);
				if(count($subcategory) >0 ){
					foreach($subcategory as $item){
						$string .= "<option value='" .$item['id']."'>".$item['name']."</option>";

					}
					echo $string;		
				}
				
			}
			else{
				header('Location: ..');
			}
			
		}

	}