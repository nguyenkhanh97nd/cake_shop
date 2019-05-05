<?php
	/**
	 * @package		Website bán hàng online
	 * @author 		TeamPBDK
	 * @email 		nguyenkhanh97nd@gmail.com
	 * @copyright 	Copyright (c) 2017
	 * @since 		Version 1.0
	 * @filesource 	site/models/cart.php
	 */
	class CartModel extends MasterModel{
	
		public function update_cart($customer, $cart){

			return parent::update_cart_to_two_table($customer,$cart);
			
		}

	}