<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/home.php
	 */
	require('admin/models/subcategory.php');
	require('admin/models/paginate.php');
	class SubcategoryController extends SubcategoryModel{

		public function add(){

			if(isset($_POST['add_subcategory']) && $_POST['txtCateName'] != NULL && $_POST['txtSlug'] != NULL && $_POST['numParent'] != NULL && $_POST['txtDescription'] != NULL ){

				$subcategory = $_POST;
				$add_subcategory = parent::admin_add_subcategory($subcategory);
				if($add_subcategory == TRUE){

					echo "<script>alert('Success Add Sub Category')</script>";
					echo "<script type='text/javascript'>
					           window.location = './list_all'
					      </script>";

				}
				else{

					echo "<script>alert('Fail Add Sub Category')</script>";
					require('admin/views/subcategory/add.php');

				}

			}
			else{

				$category = parent::get_list_category();
				require('admin/views/subcategory/add.php');

			}

		}
		public function list_all(){

			$rows  = parent::admin_list_subcategory();
			$categories = parent::get_list_category();


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$subcategories = parent::admin_list_limit($start,$limit);
			require('admin/views/subcategory/list.php');

		}

		public function delete($id){

			$check = parent::admin_delete_subcategory($id);
			if($check == TRUE){
				echo "<script>alert('Success Delete Sub Category')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete Sub Category')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
		}

		public function edit($id){
			$category = parent::get_list_category();
			$subcategory = parent::admin_find_subcategory($id);
			require('admin/views/subcategory/edit.php');
		}

		public function postEdit($id){

			if(isset($_POST['edit_subcategory'])){

				$edit = $_POST;
				if($edit['txtCateName'] == NULL || $edit['txtSlug'] == NULL ||  $edit['txtDescription'] == NULL || $edit['numParent'] == NULL){

					echo "<script>alert('Fail Edit Sub Category')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";					
				}
				else{
					$edit['id'] = $id;
					$check = parent::admin_edit_subcategory($edit);
					if($check == TRUE){
						echo "<script>alert('Success Edit Sub Category')</script>";
						echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
					}
					else{
						echo "<script>alert('Fail Edit Sub Category')</script>";
						echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
					}
				}

			}
			else{
				echo "<script>alert('Fail Edit Sub Category')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}

		}
		public function search($keysearch){
			$rows  = parent::admin_search_subcategory($keysearch);
			$categories = parent::get_list_category();


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$subcategories = parent::admin_search_subcategory_limit($keysearch,$start,$limit);			

			require('admin/views/subcategory/search.php');
		}

	}