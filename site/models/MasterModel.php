<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/MasterModel.php
	 */
	class MasterModel{

		//Module view All
		public static function get_all_from($table, $options = array() ){

			/**
			 * Hàm lấy tất cả các record trong bảng $table thỏa mãn điều kiện $options;
			 */

			// Xử lý $options
			$select =  isset( $options['select'] ) ? $options['select'] : '*';
			$where = isset ( $options['where'] ) ? 'WHERE '. $options['where'] : '';
			$order_by = isset ( $options['order_by'] ) ? 'ORDER BY '.$options['order_by'] : '';
			$limit = isset( $options['offset'] )  && isset($options['limit']) ? 'LIMIT '.$options['offset'].',' .$options['limit'] : '';
			

			//Truy vấn
			$query = "SELECT $select FROM $table $where ORDER BY id DESC $limit ";
	
			$results = mysqli_query(Database::$dbc,$query);
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				while($data = mysqli_fetch_array($results,MYSQLI_ASSOC)){
					$rows[]=$data;
				}
				if(!empty($rows)){
					return $rows;
				}

			}
			

		}
		//Module View Single
		public static function get_a_record_by_id($table , $id, $select = '*'){
			intval($id);
			$query = "SELECT $select FROM $table WHERE id = $id";
			$results = mysqli_query(Database::$dbc,$query);
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				while($data = mysqli_fetch_array($results,MYSQLI_ASSOC)){
					$row[]=$data;
				}
				if(!empty($row)){
					return $row;
				}

			}
		}

		//Module Category
		public static function get_list_by_category($table , $subcategory_id, $select = '*'){
			intval($subcategory_id);
			$query = "SELECT $select FROM $table WHERE subcategory_id = $subcategory_id ORDER BY id DESC";
			$results = mysqli_query(Database::$dbc,$query);
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{

				//Lay name subcategory
				$query_subcate = "SELECT name FROM sub_categories WHERE id = $subcategory_id ";
				$result_subcate = mysqli_query(Database::$dbc,$query_subcate);
				$name_subcate = mysqli_fetch_array($result_subcate,MYSQLI_ASSOC);

				while( $data = mysqli_fetch_array($results,MYSQLI_ASSOC) ){
					$rows[]=$data;
				}
				if(!empty($rows)){
					return array($rows,$name_subcate);
				}

			}
		}


		//Module Search
		public  function search_record($keysearch){
			$query = "SELECT * FROM products WHERE name LIKE '%$keysearch%' ORDER BY id DESC";
			$results= mysqli_query(Database::$dbc,$query);
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				while($data = mysqli_fetch_array($results,MYSQLI_ASSOC)){
					$rows[]=$data;
				}
				if(!empty($rows)){
					return $rows;
				}

			}
		
		}
		//Phân trang search
		public  function search_record_with_limit($start,$limit, $keysearch){
			$query = "SELECT * FROM products WHERE name LIKE '%$keysearch%' ORDER BY id DESC LIMIT $start,$limit";
			$results= mysqli_query(Database::$dbc,$query);
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				while($data = mysqli_fetch_array($results,MYSQLI_ASSOC)){
					$rows[]=$data;
				}
				if(!empty($rows)){
					return $rows;
				}

			}
		
		}		





		public function add_user($user){

			$query = " INSERT INTO users (name, username, password, email, address, phone, level, status) 
        		VALUES ( '" .$user["name"]. "', '" .$user["username"]. "', '" .$user["password"]. "', '" .$user["email"]. "', '" .$user["address"]. "', '" .$user["phone"]. "', '0','1'  ) ";
        	$results = mysqli_query( Database::$dbc, $query );

        	if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return true;
        	}

		}

		public function check_user($user){

			$query = " SELECT * FROM users WHERE  username = '{$user['username'] }' and password = '{$user['password']}' ";

			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return FALSE;
        	}
        	else{
        		$dataUser = mysqli_fetch_array($results,MYSQLI_ASSOC)	;
        		return $dataUser;
        	}
		}

		public function insert_comment($comment){

			$query = " INSERT INTO product_comments (id_product, id_user, content, created_at ) 
        		VALUES ( '" .$comment["id_product"]. "', '" .$comment["id_user"]. "', '" .$comment["content"]. "', '" .$comment["created_at"]. "')";
        	$results = mysqli_query( Database::$dbc, $query );



        	if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}

		public function list_comment($post_id){

			$query = "SELECT product_comments.id, product_comments.content, product_comments.created_at, users.username FROM product_comments, users WHERE product_comments.id_product = $post_id and product_comments.id_user = users.id ORDER BY product_comments.id DESC";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				while($data = mysqli_fetch_array($results,MYSQLI_ASSOC)){
					$rows[]=$data;
				}
				if(!empty($rows)){
					return $rows;
				}

			}

		}


		public function update_cart_to_two_table($customer, $cart){


			$current_time = date('Y-m-d H:i:s',time());


			$query_customer = "INSERT INTO orders ( name, email, address, phone, created_at ) VALUES ( '" .$customer['name']. "','" .$customer['email']. "','" .$customer['address']. "','" .$customer['phone']. "','" .$current_time. "') " ;

			$results_customer = mysqli_query( Database::$dbc, $query_customer  );

			if(!$results_customer){
				return die("Query {$query_customer}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$query_cart = "SELECT * FROM orders WHERE name = '{$customer['name']}' and email = '{$customer['email']}' and address = '{$customer['address']}' and phone = '{$customer['phone']}' and created_at = '{$current_time}'  ";

				$results_cart = mysqli_query( Database::$dbc, $query_cart );

				if(!$results_cart){
					return die("Query {$query_cart}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
				}
				else{
					
					$data = mysqli_fetch_array($results_cart,MYSQLI_ASSOC);
					$id_order = $data['id'];

					for( $i=1;$i<=count($cart['id']); $i++ ){
						$query = "INSERT INTO order_detail (order_id, product_id, number_product) VALUES ( '{$id_order}', '{$cart['id'][$i]}', '{$cart['number'][$i]}' )";
						$results = mysqli_query( Database::$dbc, $query );

					}
					return TRUE;

				}

			}

		}


		public function all_user_order($user){

			$query_order = "SELECT * FROM orders WHERE name = '{$user['name']}' and email = '{$user['email']}' and address = '{$user['address']}' and phone = '{$user['phone']}'   ";

			$results_order = mysqli_query( Database::$dbc, $query_order );

			if(!$results_order){
					return NULL;
			}
			else{
				
				while($data_order = mysqli_fetch_array($results_order,MYSQLI_ASSOC)){
					$rows_order[]=$data_order;
				}

				if( isset($rows_order) && count($rows_order)>0 ){

					for($i =1 ; $i<= count($rows_order);$i++ ){

						$query_detail = "SELECT order_detail.order_id, order_detail.product_id, order_detail.number_product, products.id, products.name, products.price FROM order_detail, products WHERE order_detail.order_id = '{$rows_order[$i-1]['id']}' and products.id = order_detail.product_id ";

						$results_detail = mysqli_query( Database::$dbc, $query_detail );

						while($data_detail = mysqli_fetch_array($results_detail,MYSQLI_ASSOC)){
								$rows_detail[]=$data_detail;
							}

					}
					return $rows_detail;
					
				}


			}

		}
		public function post_feedback($feedback){

			$query = " INSERT INTO feedback (name, email, title, content) 
        		VALUES ( '" .$feedback["name"]. "', '" .$feedback["email"]. "', '" .$feedback["title"]. "', '" .$feedback["content"]. "') ";
        	$results = mysqli_query( Database::$dbc, $query );

        	if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return true;
        	}

		}


		public function get_user_by_id($id) {
			$query = " SELECT * FROM users WHERE  id = '$id' ";

			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return FALSE;
        	}
        	else{
        		$dataUser = mysqli_fetch_array($results,MYSQLI_ASSOC)	;
        		return $dataUser;
        	}
		}

		public function user_update($data) {
			if (isset($data['user_update_info'])) {
				$user_id = $_SESSION['user']['id'];
				$name = $data['name'];
				$address = $data['address'];
				$phone = $data['phone'];
				$query_update = "UPDATE users SET name='$name', address='$address', phone='$phone' WHERE id='$user_id'";
				$result = mysqli_query(Database::$dbc, $query_update);
				if(!$result){
	        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
	        	}
	        	else{
	        		$user = $this->get_user_by_id($user_id);
	        		$_SESSION['user']['name'] = $user['name'];
	        		$_SESSION['user']['phone'] = $user['phone'];
	        		$_SESSION['user']['address'] = $user['address'];
	        		return true;
	        	}
			}
			if (isset($data['user_update_avatar'])) {
				$avatar = $data['file_name'];
				$user_id = $_SESSION['user']['id'];
				$query_update = "UPDATE users SET avatar='$avatar' WHERE id='$user_id'";
				$result = mysqli_query(Database::$dbc, $query_update);
				if(!$result){
	        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
	        	}
	        	else{
	        		$user = $this->get_user_by_id($user_id);
	        		$_SESSION['user']['avatar'] = $user['avatar'];
	        		return true;
	        	}
			}
		}
		
	}