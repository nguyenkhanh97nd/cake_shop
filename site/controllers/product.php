<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/product.php
	 */
	require('site/models/product.php');
	require('site/models/paginate.php');
	class ProductController extends ProductModel{


		public function index(){
			$subcategory = parent::__construct();

			$rows = parent::get_all();

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$result_paginate = parent::get_all_with_limit($start,$limit);



			require('site/views/product/index.php');
		}
		public function view($id){
			$subcategory = parent::__construct();

			$id = (int)$id;

			//Gọi post
			$row = parent::get_by_id($id);
			//Gọi commnet
			$list_comment = parent::get_list_comment($id);


		
			


			//Thêm comment
			if( isset($_POST['content']) ){

				if($_POST['content'] == NULL){
					echo "<script>alert('Comment không được trống')</script>";
					header('Location: '.$id);
				}
				else{
					
					$comment = array(
						'id_user' => $_SESSION['user']['id'],
						'id_product' => $id,
						'content'  => $_POST['content'],
						'created_at' => date('Y-m-d',time())
					);
					

					$result_comment = parent::post_comment($comment);

					if($result_comment == TRUE ){
						header('Location: '.$id);
					}
					else{
						echo 'loi';
					}

					

				}
				
			}
			else{
				require('site/views/product/view.php');
			}

			



		}

		public function list_all($subcategory_id){
			$subcategory = parent::__construct();

			$subcategory_id = (int)$subcategory_id;
			$rows = parent::get_list($subcategory_id);


			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows[0]);
			$pages = $paginate->findPages($count,$limit);

			$result_paginate = parent::get_list_with_limit($start,$limit,$subcategory_id);


			require('site/views/product/list.php');


		}

	}
