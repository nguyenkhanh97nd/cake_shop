<?php
ob_start();
session_start();

if(isset($_SESSION['user']) && $_SESSION['user']['level']==1 ){
	

	require_once('config/database.php');
	Database::connect();


	/**
	 * Require MasterModel
	 */
	require_once('admin/models/MasterModel.php');
	


	$adminURL = $_SERVER['REQUEST_URI'];
	$adminURL = rtrim($adminURL, '/\\');
	$urlAdmin = explode('/', $adminURL);
//Search


	$keySearchS = isset($_GET['s']) ? $_GET['s'] : null;

	$keySearchA = explode('?',$keySearchS,2);
	$keySearchAdmin = $keySearchA[0];

	
	
	
	if( isset($_GET['s'])  ){
		$_SESSION['searchAdmin'] = $keySearchAdmin;
	}
	else{
		unset($_SESSION['searchAdmin']);
	}



	$controllerAdmin = !empty($urlAdmin[3]) ? $urlAdmin[3] : "home";
	$actionAdmin = isset($urlAdmin[4]) ? $urlAdmin[4] : "index";
	$paramAdmin = isset($urlAdmin[5]) ? $urlAdmin[5] : null;


	//Tach paginate...
	$actionAdmin1 = explode('?', $actionAdmin);
	$actionAdmin = $actionAdmin1[0];



	// echo $controllerAdmin. '<br>';
	// echo $actionAdmin . '<br>';
	// echo $paramAdmin .'<br>' ;







$fileNameAdmin = 'admin/controllers/'.$controllerAdmin.'.php';


	/**
	 * Kiểm tra tồn tại của file controller. Nếu tồn tại thì gọi controller và action(nếu có). Không tồn tại thì trả về 404 error
	 */
	if(file_exists($fileNameAdmin)){
		include($fileNameAdmin);

		// Chuyển tên controller sang trùng với tên class có trong controller để sử dụng
		$classNameAdmin = ucfirst($controllerAdmin).'Controller';

		// Khởi tạo đối tượng mới trong controller
		$objectAdmin = new $classNameAdmin;

		// Gọi hàm action tương ứng trong controller



		if(!method_exists($objectAdmin, $actionAdmin ) ){
			require('404.php');
		}

		else{

			if(empty($keySearchAdmin)){	
				$objectAdmin -> $actionAdmin($paramAdmin);
			}
			else{
				$objectAdmin->$actionAdmin($keySearchAdmin);
			}
		}
		
	}
	else{
		require('404.php');
	}

}
else{
	echo "<script>alert('Not Admin')</script>";
	echo "<script>window.location.href='http://cakeshop.test/user/login'</script>";
}