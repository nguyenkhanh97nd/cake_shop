<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	admin/controllers/category.php
	 */
	require('admin/models/category.php');
	require('admin/models/paginate.php');
	class CategoryController extends CategoryModel{
		public function add_new(){

			if(isset($_POST['add_category']) && $_POST['txtCateName'] != NULL && $_POST['txtSlug'] != NULL && $_POST['txtDescription'] != NULL ){

				$category = $_POST;
				$add_category = parent::admin_add_category($category);
				if($add_category == TRUE){

					echo "<script>alert('Success Add Category')</script>";
					echo "<script type='text/javascript'>
					           window.location = './list_all'
					      </script>";

				}
				else{

					echo "<script>alert('Fail Add Category')</script>";
					require('admin/views/category/add.php');

				}

			}
			else{

				require('admin/views/category/add.php');

			}
			
			

		}
		public function list_all(){

			$rows = parent::admin_list_category();

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$categories = parent::admin_list_limit($start,$limit);
 			require('admin/views/category/list.php');

		}

		public function delete($id){

			$check = parent::admin_delete_category($id);
			if($check == TRUE){
				echo "<script>alert('Success Delete Category')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete Category')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
		}

		public function edit($id){

			$category = parent::admin_find_category($id);
			require('admin/views/category/edit.php');
		}

		public function postEdit($id){

			if(isset($_POST['edit_category'])){

				$edit = $_POST;
				if($edit['txtCateName'] == NULL || $edit['txtSlug'] == NULL ||  $edit['txtDescription'] == NULL ||  $edit['status'] == NULL){

					echo "<script>alert('Fail Edit Category')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";					
				}
				else{
					$edit['id'] = $id;
					$check = parent::admin_edit_category($edit);
					if($check == TRUE){
						echo "<script>alert('Success Edit Category')</script>";
						echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
					}
					else{
						echo "<script>alert('Fail Edit Category')</script>";
						echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
					}
				}

			}
			else{
				echo "<script>alert('Fail Edit Category')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}

		}

		public function search($keysearch){

			$rows = parent::admin_search_category($keysearch);

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$categories = parent::admin_search_category_limit($keysearch,$start,$limit);

					

			require('admin/views/category/search.php');
		}

	}