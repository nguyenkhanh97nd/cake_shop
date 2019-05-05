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


		public function add_user($user){

			$query = " INSERT INTO users (name, username, password, email, address, phone, level, status) 
        		VALUES ( '" .$user["txtNameUser"]. "', '" .$user["txtUser"]. "', '" .md5($user["txtPass"]). "', '" .$user["txtEmail"]. "', '" .$user["txtAddress"]. "', '" .$user["txtPhone"]. "', '" .$user['level']. "', '" .$user['status']. "' )" ;
        	$results = mysqli_query( Database::$dbc, $query );

        	if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return true;
        	}

		}
		public function list_user(){

			$query = "SELECT * FROM users ORDER BY id DESC";
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

		public function delete_user($id){
			$query = "DELETE FROM users WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}
		}

		public function find_user($id){
			$query = "SELECT * FROM users WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}

		public function edit_user($edit){
			$query = "UPDATE users SET name= '{$edit['txtNameUser']}',password= '{$edit['txtPass']}',phone= '{$edit['txtPhone']}',address = '{$edit['txtAddress']}',level= '{$edit['level']}',status = '{$edit['status']}' WHERE id = {$edit['id']} ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}
		}


		public function add_category($category){

			$query = "INSERT INTO categories (name, slug, description, status) VALUES ('{$category['txtCateName']}', '{$category['txtSlug']}', '{$category['txtDescription']}', 1) ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}

		public function list_category(){
			$query = "SELECT * FROM categories ORDER BY id DESC";
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

		public function delete_category($id){
			$query = "DELETE FROM categories WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}
		}

		public function find_category($id){
			$query = "SELECT * FROM categories WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}
		public function edit_category($edit){

			$query = "UPDATE categories SET name= '{$edit['txtCateName']}', slug = '{$edit['txtSlug']}', description = '{$edit['txtDescription']}', status = '{$edit['status']}' WHERE id = {$edit['id']} ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}
		}
		

		public function add_subcategory($subcategory){

			$query = "INSERT INTO sub_categories (name, slug, description, status, category_id) VALUES ('{$subcategory['txtCateName']}', '{$subcategory['txtSlug']}', '{$subcategory['txtDescription']}', 1, '{$subcategory['numParent']}') ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}
		
		public function list_subcategory(){
			$query = "SELECT * FROM sub_categories ORDER BY id DESC";
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
		public function delete_subcategory($id){
			$query = "DELETE FROM sub_categories WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}
		}

		public function find_subcategory($id){
			$query = "SELECT * FROM sub_categories WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}

		public function edit_subcategory($edit){

			$query = "UPDATE sub_categories SET name= '{$edit['txtCateName']}', slug = '{$edit['txtSlug']}', description = '{$edit['txtDescription']}', status = '{$edit['status']}', category_id = '{$edit['numParent']}' WHERE id = {$edit['id']} ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}
		}


		public function list_subcategory_of($cate){
			$query = "SELECT * FROM sub_categories  WHERE category_id = {$cate} ORDER BY id DESC";
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

		public function post_product($product){

			$query = "INSERT INTO products (subcategory_id, name, slug, brief, content, price, image, status) VALUES ( '{$product['subcategory']}', '{$product['txtName']}', '{$product['txtSlug']}' , '{$product['txtBrief']}', '{$product['txtContent']}', '{$product['numPrice']}', '{$product['image']}', 1) ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}

		public function list_product(){
			$query = "SELECT * FROM products ORDER BY id DESC";
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
		public function list_limit($table,$start,$limit){

			$query = "SELECT * FROM $table ORDER BY id DESC LIMIT $start, $limit";
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

		public function delete_product($id){
			$query = "DELETE FROM products WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}
		}
		public function find_product($id){
			$query = "SELECT * FROM products WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}

		public function edit_product($edit){

			$query = "UPDATE products SET subcategory_id ='{$edit['subcategory']}', name= '{$edit['txtName']}', slug = '{$edit['txtSlug']}', price = '{$edit['numPrice']}', brief = '{$edit['txtBrief']}', content = '{$edit['txtContent']}', image = '{$edit['image']}' , status = '{$edit['status']}' WHERE id = {$edit['id']} ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}
		}
		public function list_comment(){
			$query = "SELECT * FROM product_comments ORDER BY id DESC";
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

		public function list_comment_product($id){

			$query = "SELECT * FROM product_comments WHERE id_product = $id";
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
		public function delete_comment($id){
			$query = "DELETE FROM product_comments WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}
		}

		public function list_news(){
			$query = "SELECT * FROM news ORDER BY id DESC";
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
		public function delete_news($id){
			$query = "DELETE FROM news WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}
		}

		public function find_news($id){
			$query = "SELECT * FROM news WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}

		public function edit_news($edit){

			$query = "UPDATE news SET subcategory_id ='{$edit['subcategory']}', name= '{$edit['txtName']}', slug = '{$edit['txtSlug']}', brief = '{$edit['txtBrief']}', content = '{$edit['txtContent']}', image = '{$edit['image']}' , status = '{$edit['status']}' WHERE id = {$edit['id']} ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}
		}

		public function post_news($news){

			$query = "INSERT INTO news (subcategory_id, name, slug, brief, content, image, author, date, status) VALUES ( '{$news['subcategory']}', '{$news['txtName']}', '{$news['txtSlug']}' , '{$news['txtBrief']}', '{$news['txtContent']}', '{$news['image']}', '{$news['author']}','{$news['date']}' , 1) ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}

		public function search_all($table,$keysearch){

			$query = "SELECT * FROM $table WHERE name LIKE '%$keysearch%' ORDER BY id DESC";
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
		public function search_limit($table, $keysearch, $start, $limit){

			$query = "SELECT * FROM $table WHERE name LIKE '%$keysearch%' ORDER BY id DESC LIMIT $start, $limit";
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

		public function list_order(){


			$query = "SELECT * FROM order_detail ORDER BY id DESC";
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
		public function list_customer(){

			$query = "SELECT * FROM orders ORDER BY id DESC";
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
		public function order_detail_waiting(){
			$query = "SELECT * FROM order_detail WHERE status = 0 ORDER BY id DESC";
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
		public function order_detail_waiting_limit($start,$limit){

			$query = "SELECT * FROM order_detail WHERE status = 0 ORDER BY id DESC LIMIT $start,$limit";
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
		public function order_detail_success(){
			$query = "SELECT * FROM order_detail WHERE status = 1 ORDER BY id DESC";
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
		public function order_detail_success_limit($start,$limit){

			$query = "SELECT * FROM order_detail WHERE status = 1 ORDER BY id DESC LIMIT $start,$limit";
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
		public function success_order($id){

			$query = "UPDATE order_detail SET status = 1 WHERE id = $id ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}
		public function pending_order($id){

			$query = "UPDATE order_detail SET status = 0 WHERE id = $id ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
        		return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
        	}
        	else{
        		return TRUE;
        	}

		}

		public function find_order_detail($id){
			$query = "SELECT * FROM order_detail WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}
		public function find_product_order($id){
			$query = "SELECT * FROM products WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}
		public function find_info_order($id){
			$query = "SELECT * FROM orders WHERE id = $id";
			$results = mysqli_query( Database::$dbc, $query );
			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				$data = mysqli_fetch_array($results,MYSQLI_ASSOC);
				return $data;

			}
		}
		public function list_feedback(){

			$query = "SELECT * FROM feedback ORDER BY id DESC";
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
		public function delete_feedback($id){

			$query = "DELETE FROM feedback WHERE id = '{$id}' ";
			$results = mysqli_query( Database::$dbc, $query );

			if(!$results){
				return die("Query {$query}\n<br/> MYSQL Error:".mysqli_error(Database::$dbc));
			}
			else{
				
				return TRUE;

			}

		}


	}