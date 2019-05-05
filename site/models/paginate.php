<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
 	 * @filesource 		site/models/paginate.php
	 */
	
	class PaginateModel extends MasterModel {

		public $limit;
		// public $baseUrl = $_SERVER['PHP_SELF'];

		//Tìm trang hiện tại
		public static function findStart($limit){

			//Nếu không tồn tại $_GET['page'] trên đường dẫn hoặc nó =1 thì đây là trang đầu tiên
			
			if(!isset($_GET['s']) ){
				if(!isset($_GET['page'] ) || $_GET['page'] == 1){
				$start =0;
				$_GET['page'] = 1;
				}
				else{
					$start = ((int)$_GET['page'] - 1)*$limit;
				}
			}
			else{
				$url = explode('page=',$_GET['s']);
				if(!isset( $url[1] ) || $url[1] == 1){
				$start =0;
				
				}
				else{
					$start = ((int)$url[1] - 1)*$limit;
				}
			}


			
			return $start;

		}

		//Lấy tổng số trang
		public static function findPages($count, $limit){

			//Nếu tổng record chia hết cho số kq/1 trang thì chia. còn không thì. +1
			//
			$pages = (($count % $limit) == 0) ? ($count/$limit) : (($count/$limit)+1);
			return $pages;

		}


		//Hiển thị ra list paginate. Biến đầu tiên là lấy page hiện tại. biến thứ 2 là tổng số trang return từ hàm trên
		//
		public static function getList($curPage, $pages){

			
			$page_list = "";//Lưu trang . điều hướng đầu, cuối trang

			//Tách lấy đường dẫn gốc của trang
			$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
			

			if( isset($_SESSION['search']) ){
				$currentUrl = 'search/keyword/?s='.$_SESSION['search'];
			}
			else{
				$currentUrl = $uri_parts[0];

			}


			//In danh sách
			for($i=1; $i<=$pages ;$i++){

				if($i == $curPage){
					$page_list .= "<li class='active'><span>".$i."</span></li>";// Nếu là trang hiện tại thì bỏ đường link, in đậm và chỉ hiện thị con số của trang
				}
				else{
					$page_list .= '<li><a href="'.$currentUrl.'?page='.$i.'" title="Trang '.$i.'">'.$i.'</a></li>';
				}
				$page_list .='';

			}
			return $page_list;

		}
	}