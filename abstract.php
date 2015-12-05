<?php

abstract class User{


	public function get(){
		return 'User';
	}


	abstract public function find();

}

class Product extends User{

	public function find(){

	}
}


$user = new Product;

echo $user->get();