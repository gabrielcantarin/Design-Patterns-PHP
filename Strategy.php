<?php 

interface Products () {
	public function save();
	public function update();
}

class Category_Fruits implements Products () {
	public function save() {
		// ...
	}
	
	public function update() {
		// ..
	}
	
}

class Category_Vegetables implements Products () {
	public function save() {
		// ...
	}
	
	public function update() {
		// ..
	}
}

function save($category) {
	if ($category == 'Fruit') {
		$temp = new Category_Fruits();
	}else if ($category == 'Vegetable') {
		$temp = new Category_Vegetables();
	}
	
	$temp->save();
}

save('Fruit');

