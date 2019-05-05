<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/cart.php
	 */
	require('site/models/cart.php');
	class CartController extends CartModel{
		public function index(){

			if( isset( $_POST['callcart'] ) && count($_POST) == 5 ){

				
				
				if( !isset($_SESSION['product'] ) ){
					$_SESSION['product'][] = $_POST;
				}
				else{
					$check = TRUE;
					foreach( $_SESSION['product'] as $item ){
		
						if( intval( $item['id'] ) == intval( $_POST['id'] ) ){
							$check = FALSE;
						}
					}
					if( $check == TRUE ){
						$_SESSION['product'][] = $_POST;
					}
				}
				
			}

			if(isset($_SESSION['product'])){
				$cart = $_SESSION['product'];
			}
			else{
				$cart = NULL;
			}
							

			if( isset( $_POST['money-all'] ) ){
				$i = 1 ;
				$number = $_POST['number'];
				foreach ($cart as $item) {
					if($number[$i] >0 ){
						$cart[$i-1]['number'] = $number[$i];
						$i++;
					}
				}
			}

			
			if(isset( $_POST ['add-all'] ) ){

				$_SESSION['cart'] = $_POST;

				require('site/views/cart/add.php');
			}
			else{
				require('site/views/cart/index.php');
			}

			

		}

		public function add(){

			if( isset($_POST ) && isset($_SESSION['cart']) ){


				$customer = $_POST;
				$cart_info = $_SESSION['cart'];

				$update = parent::update_cart($customer,$cart_info);
				if($update == TRUE){

					unset($_SESSION['cart']);
					unset($_SESSION['product']);
					echo "<script>alert('Đặt hàng thành công')</script>";
					echo "<script>window.location.href='.'</script>";

				}

			}
			else{
				header('Location: .');
			}

		}



	}