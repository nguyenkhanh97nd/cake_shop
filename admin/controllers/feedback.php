<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	admin/controllers/category.php
	 */
	require('admin/models/feedback.php');
	require('admin/models/paginate.php');
	class FeedbackController extends FeedbackModel{

		public function list_all(){

			$rows = parent::admin_list_feedback();

			//Phần trang
			$paginate = new PaginateModel;
			$limit = 8;
			$start = $paginate->findStart($limit);
			$count = count($rows);
			$pages = $paginate->findPages($count,$limit);

			$feedbacks = parent::admin_list_limit($start,$limit);

			require('admin/views/feedback/list.php');

		}

		public function delete($id){

			$check = parent::admin_delete_feedback($id);
			if($check == TRUE){
				echo "<script>alert('Success Delete Feedback')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}
			else{
				echo "<script>alert('Fail Delete Feedback')</script>";
				echo "<script type='text/javascript'>
					           window.location = '../list_all'
					      </script>";
			}

		}
	}