<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/home.php
	 */
	
	require('admin/models/news.php');
	require('admin/models/paginate.php');
	class NewsController extends NewsModel{
		public function add(){

			$category = parent::admin_list_category();
			require('admin/views/news/add.php');

		}

		public function postAdd(){

			if( isset($_POST['add_news']) && $_POST['category'] != NULL && !empty($_POST['subcategory']) && $_POST['txtName'] != NULL && $_POST['txtSlug'] != NULL && $_POST['txtName'] != NULL && $_POST['txtBrief'] != NULL && $_POST['txtContent'] != NULL && !empty($_FILES['image']['name']) && ($_FILES['image']['type'] == 'image/png' || $_FILES['image']['type'] == 'image/jpg' || $_FILES['image']['type'] == 'image/jpeg') ){

				

				$path = 'public/images/news/';
				$tmp_name = $_FILES['image']['tmp_name'];
				$name = mt_rand(1000,9999)."_".$_FILES['image']['name'];
                $type = $_FILES['image']['type']; 
                $size = $_FILES['image']['size'];

                $news = $_POST;
                $news['image'] = $name;
                $news['author'] = $_SESSION['user']['id'];
                $news['date'] = date('Y-m-d',time());
                $check = parent::admin_post_news($news);
                if($check == TRUE){

	                	// Upload file
	                move_uploaded_file($tmp_name,$path.$name);
	                echo "<script>alert('Success add news')</script>";
	                echo "<script type='text/javascript'>
					           window.location = './list_all'
					      </script>";

                }
                else{

                	echo "<script>alert('Failed add news')</script>";
					echo '<script>history.go(-1)</script>';

                }


			}
			else{
				echo "<script>alert('Failed. Fill correct input')</script>";
				echo '<script>history.go(-1)</script>';
			}

		}

		public function list_all(){
			$users = parent::admin_list_user();
			$categories = parent::admin_list_category();
			$subcategories = parent::admin_list_subcategory();
			$rows = parent::admin_list_news();


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$news = parent::admin_list_limit($start,$limit);
			require('admin/views/news/list.php');

		}

		public function delete($id){
			$news = parent::admin_find_news($id);
			$check = parent::admin_delete_news($id);
			if($check == TRUE){
				unlink('public/images/news/'.$news['image']);
				echo "<script>alert('Success Delete News')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete News')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
		}

		public function edit($id){
			$category = parent::admin_list_category();
			$subcategory = parent::admin_list_subcategory();
			$news = parent::admin_find_news($id);
			require('admin/views/news/edit.php');
		}
		public function postEdit($id){

			if(isset($_POST['edit_news'])){

				$edit = $_POST;
				if($edit['category'] == NULL || $edit['subcategory'] == NULL ||  $edit['txtName'] == NULL || $edit['txtSlug'] == NULL || $edit['txtBrief'] == NULL || $edit['txtContent'] == NULL || $edit['status'] == NULL){

					echo "<script>alert('Fail Edit News')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";					
				}
				else{
					$news = parent::admin_find_news($id);

					if(!empty($_FILES['image']['name']) && ($_FILES['image']['type'] == 'image/png' || $_FILES['image']['type'] == 'image/jpg' || $_FILES['image']['type'] == 'image/jpeg')){

						$path = 'public/images/news/';
						$tmp_name = $_FILES['image']['tmp_name'];
						$name = mt_rand(1000,9999)."_".$_FILES['image']['name'];

		                $edit['image'] = $name;

					}
					else{
						$edit['image'] = $news['image'];
					}

					$edit['id'] = $id;
					$check = parent::admin_edit_news($edit);
					if($check == TRUE){
						if($edit['image'] != $news['image']){
							if(file_exists('public/images/news/'.$news['image'])){
								unlink('public/images/news/'.$news['image']);
							}
							
							move_uploaded_file($tmp_name,$path.$name);
						}		

						echo "<script>alert('Success Edit News')</script>";
						echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
					}
					else{
						echo "<script>alert('Fail Edit News')</script>";
						echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
					}
				}

			}
			else{
				echo "<script>alert('Fail Edit News')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1)
					      </script>";
			}

		}

		public function search($keysearch){
			$users = parent::admin_list_user();
			$categories = parent::admin_list_category();
			$subcategories = parent::admin_list_subcategory();
			$rows = parent::admin_search_news($keysearch);


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$news = parent::admin_search_news_limit($keysearch,$start,$limit);		

			require('admin/views/news/search.php');
		}

	}