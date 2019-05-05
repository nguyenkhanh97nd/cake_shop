<?php
ob_start();
session_start();
header("X-XSS-Protection: 0");


	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	index.php
	 */
	


	/**
	 * Require file cấu hình database, kết nối database
	 */
	require_once('config/database.php');
	Database::connect();


	/**
	 * Require MasterModel
	 */
	require_once('site/models/MasterModel.php');

	/**
	 * [$URL description] Lấy controller và action từ đường dẫn
	 */
	
	$GET = $_SERVER['PHP_SELF'];

	$URL = rtrim($GET, '/\\');

//Search


	$keySearchS = isset($_GET['s']) ? $_GET['s'] : null;

	$keySearchA = explode('?',$keySearchS,2);
	$keySearch = $keySearchA[0];
	
	if( isset($_GET['s'])  ){
		$_SESSION['search'] = $keySearch;
	}
	else{
		unset($_SESSION['search']);
	}
	



	/**
	 * [$url description] Thực hiện cắt $URL thành controller và action. $url sẽ là 1 mảng chứa controller và action
	 */

	$url = explode('/', $URL);
	/**
	 * [$controller description]  Lấy controller, action, tham số action từ mảng $url
	 */
	$controller = !empty($url[1]) ? $url[1] : "home";
	$action = isset($url[2]) ? $url[2] : "index";
	$param = isset($url[3]) ? $url[3] : null;
 	

// echo $controller.'<br>'; 
// echo $action.'<br>';
// echo $param;


	/**
	 * [$fileName description] Lưu đường dẫn tới file controller
	 */
	$fileName = 'site/controllers/'.$controller.'.php';


	/**
	 * Kiểm tra tồn tại của file controller. Nếu tồn tại thì gọi controller và action(nếu có). Không tồn tại thì trả về 404 error
	 */
	if(file_exists($fileName)){
		include($fileName);

		// Chuyển tên controller sang trùng với tên class có trong controller để sử dụng
		$className = ucfirst($controller).'Controller';

		// Khởi tạo đối tượng mới trong controller
		$object = new $className;

		// Gọi hàm action tương ứng trong controller



		if(!method_exists($object, $action ) ){
			require('404.php');
		}

		else{
			if(!empty($param)){	
				$object -> $action($param);
			}
			else{
				if(!empty($keySearch)){
					$object->$action($keySearch);
				}
				else{

					$object -> $action(NULL);
				}
			}
		}
		
	}
	else{
		require('404.php');
	}



	