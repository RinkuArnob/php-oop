<?php

class User{

	private $name;
	private $email;
	private $web;

	public function __construct($name, $email, $website){
		$this->name = $name;
		$this->email = $email;
		$this->web = $website;
	}

	public function getName(){
		return $this->name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getWebsite(){
		return $this->web;
	}
	
	public function find(){

		echo 'Searching user: ' . $this->name;

	}

}


class Post extends User{
	private $content;
	private $user;

	public function __construct($content, User $user){
		$this->content = $content;
		$this->user = $user;
	}

	public function createPost(){
		var_dump($this->user);
	}

}


$user = new User('Rinku', 'some@one.com', 'http://google.com');
$post = new Post('Some content', $user);
echo $post->createPost();
