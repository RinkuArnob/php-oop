<?php

trait myTrait{
	public function greetings(){
		return 'Welcome dude!';
	}
}

trait yourTrait{
	public function sayHello(){
		return 'Hello world';
	}
}


trait combine{
	use myTrait, yourTrait;
}


class Person{

	use myTrait;

	public function greetings(){
		return 'Greetings from person';
	}


}


class Message{
	use combine;
}





$person = new Person;

echo $person->greetings();