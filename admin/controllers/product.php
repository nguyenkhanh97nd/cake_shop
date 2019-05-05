<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/home.php
	 */
	require('admin/models/product.php');
	require('admin/models/paginate.php');
	class ProductController extends ProductModel{
		public function add(){

			$category = parent::admin_list_category();
			require('admin/views/product/add.php');

		}

		public function postAdd(){
			if( isset($_POST['add_product']) && $_POST['category'] != NULL && !empty($_POST['subcategory']) && $_POST['txtName'] != NULL && $_POST['txtSlug'] != NULL && $_POST['txtName'] != NULL && $_POST['txtBrief'] != NULL && $_POST['txtContent'] != NULL && $_POST['numPrice'] != NULL && !empty($_FILES['image']['name']) && ($_FILES['image']['type'] == 'image/png' || $_FILES['image']['type'] == 'image/jpg' || $_FILES['image']['type'] == 'image/jpeg') ){

				

				$path = 'public/images/product/';
				$tmp_name = $_FILES['image']['tmp_name'];
				$name = mt_rand(1000,9999)."_".$_FILES['image']['name'];
                $type = $_FILES['image']['type']; 
                $size = $_FILES['image']['size'];

                $product = $_POST;
                $product['image'] = $name;
                $check = parent::admin_post_product($product);
                if($check == TRUE){

	                	// Upload file
	                move_uploaded_file($tmp_name,$path.$name);
	                echo "<script>alert('Success add product')</script>";
	                echo "<script type='text/javascript'>
					           window.location = './list_all'
					      </script>";

                }
                else{

                	echo "<script>alert('Failed add product')</script>";
					echo '<script>history.go(-1)</script>';

                }
                



			}
			else{
				echo "<script>alert('Failed. Fill correct input')</script>";
				echo '<script>history.go(-1)</script>';
			}
		}

		public function list_all(){



			$categories = parent::admin_list_category();
			$subcategories = parent::admin_list_subcategory();
			$rows = parent::admin_list_product();

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$products = parent::admin_list_limit($start,$limit);

			require('admin/views/product/list.php');

		}
		public function delete($id){
			$product = parent::admin_find_product($id);
			$check = parent::admin_delete_product($id);
			if($check == TRUE){
				unlink('public/images/product/'.$product['image']);
				echo "<script>alert('Success Delete Product')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete Product')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
		}

		public function edit($id){
			$category = parent::admin_list_category();
			$subcategory = parent::admin_list_subcategory();
			$product = parent::admin_find_product($id);

			$comments = parent::admin_list_comment_product($id);

			require('admin/views/product/edit.php');
		}
		public function deleteComment($id){
			$check = parent::admin_delete_comment($id);
			if($check == TRUE){
				echo "<script>alert('Success Delete Comment')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete Comment')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}
		}


		public function postEdit($id){
			if(isset($_POST['edit_product'])){

				$edit = $_POST;
				if($edit['category'] == NULL || $edit['subcategory'] == NULL ||  $edit['txtName'] == NULL || $edit['numPrice'] == NULL || $edit['txtSlug'] == NULL || $edit['txtBrief'] == NULL || $edit['txtContent'] == NULL || $edit['status'] == NULL){

					echo "<script>alert('Fail Edit Product')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";					
				}
				else{
					$product = parent::admin_find_product($id);

					if(!empty($_FILES['image']['name']) && ($_FILES['image']['type'] == 'image/png' || $_FILES['image']['type'] == 'image/jpg' || $_FILES['image']['type'] == 'image/jpeg')){

						$path = 'public/images/product/';
						$tmp_name = $_FILES['image']['tmp_name'];
						$name = mt_rand(1000,9999)."_".$_FILES['image']['name'];

		                $edit['image'] = $name;

					}
					else{
						$edit['image'] = $product['image'];
					}

					$edit['id'] = $id;
					$check = parent::admin_edit_product($edit);
					if($check == TRUE){
						if($edit['image'] != $product['image']){
							if(file_exists('public/images/product/'.$product['image'])){
								unlink('public/images/product/'.$product['image']);
							}
							
							move_uploaded_file($tmp_name,$path.$name);
						}		

						echo "<script>alert('Success Edit Product')</script>";
						echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
					}
					else{
						echo "<script>alert('Fail Edit Product')</script>";
						echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
					}
				}

			}
			else{
				echo "<script>alert('Fail Edit Product')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}
		}

		public function search($keysearch){
			$categories = parent::admin_list_category();
			$subcategories = parent::admin_list_subcategory();

			$rows = parent::admin_search_product($keysearch);

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$products = parent::admin_search_product_limit($keysearch,$start,$limit);			

			require('admin/views/product/search.php');
		}
		

	}