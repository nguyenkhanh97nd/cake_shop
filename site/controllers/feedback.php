<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/controllers/about.php
	 */
	require('site/models/feedback.php');
	class FeedbackController extends FeedbackModel{
		public function index(){

			if(isset($_POST['feedback']) && $_POST['name'] !=NULL && $_POST['email'] !=NULL && $_POST['title'] !=NULL && $_POST['content'] !=NULL ){

				$feedback = $_POST;
				$check = parent::admin_post_feedback($feedback);
				if($check == TRUE){

					echo "<script>alert('Success Send Feedback')</script>";
					echo "<script type='text/javascript'>
					           window.location = './'
					      </script>";

				}
				else{
					echo "<script>alert('Fail Send Feedback')</script>";
					echo "<script type='text/javascript'>
					           history.go(-1);
					      </script>";

				}
			}
			else{
				echo "<script>alert('Fail Send Feedback')</script>";
				echo "<script type='text/javascript'>
					           history.go(-1);
					      </script>";
			}
		}
	}