<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	admin/controllers/member.php
	 */
	require('admin/models/member.php');
	require('admin/models/paginate.php');
	class MemberController extends MemberModel{
		public function add(){


			if(isset($_POST['add']) && count($_POST)==10  ){

				$member = $_POST;
				if( $member['txtNameUser'] == NULL || $member['txtUser'] == NULL || $member['txtPass'] == NULL || $member['txtEmail'] == NULL || $member['txtAddress'] == NULL || $member['txtPhone'] == NULL || $member['level'] == NULL || $member['status'] == NULL ){

					echo "<script>alert('Fail Add Member')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";

				}
				else{

					$check = parent::admin_add_user($member);

					if($check == TRUE){
						echo "<script>alert('Success Add Member')</script>";
						echo "<script type='text/javascript'>
					           window.location = './list_all'
					      </script>";
					}
					else{
						echo "<script>alert('Fail Add Member')</script>";
						echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
					}

				}
				

			}
			else{
				require('admin/views/member/add.php');
			}
			


			

		}
		public function list_all(){

			$rows = parent::admin_list_user();

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$member = parent::admin_list_limit($start,$limit);
			require('admin/views/member/list.php');

		}

		public function delete($id){

			$check = parent::admin_delete_user($id);
			if($check == TRUE){
				echo "<script>alert('Success Delete Member')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete Member')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}

		}

		public function edit($id){

			$user = parent::admin_find_user($id);
			require('admin/views/member/edit.php');

		}
		public function postEdit($id){

			if(isset($_POST['post_edit'])){

				$edit = $_POST;
				if( $edit['txtNameUser'] == NULL || $edit['txtAddress'] == NULL || $edit['txtPhone'] == NULL || $edit['level'] == NULL || $edit['status'] == NULL || $edit['txtPass'] != $edit['txtRePass'] ){

					echo "<script>alert('Fail Edit Member')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";

				}
				else{
					$user = parent::admin_find_user($id);

					$edit['id'] = $id;
						if($edit['txtPass'] == NULL ){
							$edit['txtPass'] = $user['password'];
						}
						else{
							$edit['txtPass'] = md5($edit['txtPass']);
						}
					$check = parent::admin_edit_user($edit);

					if($check == TRUE){
						echo "<script>alert('Success Edit Member')</script>";
						echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
					}
					else{
						echo "<script>alert('Fail Edit Member')</script>";
						echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
					}

					
				}

			}
			else{
				echo "<script>alert('Fail Edit Member')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}

		}

		public function search($keysearch){

			$rows = parent::admin_search_member($keysearch);

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$member = parent::admin_search_member_limit($keysearch,$start,$limit);

					

			require('admin/views/member/search.php');
		}

	}