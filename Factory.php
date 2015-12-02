<?php 
/**
**** Factory
**/
interface Animal {
	public function eat();
	public function walk();
}

class Cat implements Animal {
	public function eat() {
		echo 'Cat is eating';
	}
	
	public function walk() {		
		echo 'Cat is walking';
	}
}

class Dog implements Animal {
	public function eat() {
		echo 'Dog is eating';
	}
	
	public function walk() {		
		echo 'Dog is walking';
	}
}

class AnimalFactory {
	public function create($type) {
		if ($type == "Cat") {
			return new Cat();
		}elseif ($type == "Dog"){ 
			return new Dog();
		}
	}
}

$factory = new AnimalFactory();

$dog = $factory->create("Dog");
$dog->eat();