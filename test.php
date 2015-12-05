<?php

interface myInterface{

    public function find();

}


class User implements myInterface {
    private $name;

    function __construct(){

    }

    public function setUser(){

    }

    public function getUser(){

    }

    public function find(){
        return 'User searching.. ';
    }
}


class Product extends User{

    public function getProduct(){

        return 'Product';

    }

    

}

// $user = new User;
// echo $user->find();

$product = new Product;
echo $product->find();