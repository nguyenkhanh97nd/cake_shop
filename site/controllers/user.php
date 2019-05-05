<?php

	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/user.php
	 */
	
	require('site/models/user.php');
	class UserController extends UserModel{


		public function index(){

			if( !isset($_SESSION['user']) ){
				require('site/views/user/login.php');
			}
			else{

				//CART USER
				$cart = parent::user_order($_SESSION['user']);


				require('site/views/user/index.php');
			}






		}


		public function login(){

			if(!isset($_SESSION['user'])){

				if(!empty($_POST)){

					if($_POST['username'] == NULL || $_POST['password'] == NULL){
						echo "<script>alert('Không được để trống')</script>";
						require('site/views/user/login.php');
					}
					else{
						$user = array(
							'username' => $_POST['username'],
							'password' => md5($_POST['password'])
						);

						$check = parent::check_login($user);

						if($check == FALSE){

							echo "<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
							require('site/views/user/login.php');

						}
						else{

							echo "<script>alert('Đăng nhập thành công')</script>";
							$_SESSION['user'] = $check;
							echo "<script>window.location.href='..'</script>";

						}
					}


				}
				else{
					require('site/views/user/login.php');
				}

				

			}
			else{
				header("Location: ..");
			}

		}



		public function register(){

			
			if(isset($_SESSION['user'])){

				header('Location: .');

			}

			else{

					if(!empty($_POST)){

						//neu ton tai $_POST

						if( $_POST['username'] == NULL || $_POST['password'] == NULL || $_POST['address'] == NULL || $_POST['phone'] == NULL || $_POST['email'] == NULL || $_POST['name'] == NULL ){

							require('site/views/user/register.php');

						}
						else{
							$user = array(
								'username' => $_POST['username'],
								'password' => md5($_POST['password']),
								'address'  => $_POST['address'],
								'phone'    => $_POST['phone'],
								'email'	   => $_POST['email'],
								'name'     => $_POST['name'],
								'level'	   => 0,
							);

							parent::save_user($user);

							$_SESSION['user'] = $user;

							echo "<script>alert('Đăng ký thành công')</script>";
							require('site/views/home/index.php');

						}


					
					}
					else{
						
						require('site/views/user/register.php');
	
					}

				
			}
			

		}

		public function logout(){

			if(isset($_SESSION['user'])){
				unset($_SESSION['user']);
				header("Location: {$_SERVER['HTTP_REFERER']}");
			}
			else{
				header("Location: {$_SERVER['HTTP_REFERER']}");
			}

		}

		public function update_info() {
			if (isset($_SESSION['user'])) {
				if (isset($_GET['user_update_info'])) {
					$dataUpdate = $_GET;
					parent::user_update_info($dataUpdate);
				}
				header('Location: /user');
			} else {
				header('Location: /');
			}
			
		}

		public function update_avatar() {
			if (isset($_SESSION['user'])) {
				if (isset($_POST['user_update_avatar'])) {
					if (isset($_FILES['avatar_input'])) {
						$file = $_FILES['avatar_input'];
						$mimeType = $file['type'];
						if ($mimeType != 'image/png' && $mimeType != 'image/jpeg' && $mimeType != 'image/gif') {
							echo 'Chỉ cho phép ảnh png, jpeg, gif';
							return true;
						}

						$target_dir = "public/images/user/";
						$file_name = $_SESSION['user']['username'].'.'.$this->getImageExtension($mimeType);
						move_uploaded_file($file['tmp_name'], $target_dir.$file_name);
						$data = [
							'file_name' => $file_name,
							'user_update_avatar' => true
						];
						parent::user_update_avatar($data);
						header("Location: /user");
					}
				}
			} else {
				header('Location: /');
			}
		}
		public function getImageExtension($str) {
			$s = explode('/', $str);
			return $s[1];
		}
	}