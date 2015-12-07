<?php 
class Buy {
    private $product;
	
    function __construct($product) {
        $this->product  = $product;
    }
	
	function lookForSomething() {}
	
	function choiseBetterSomething() {}
	
	function paySomething() {}
}

class BuyCommand {
	private $buy_somethin; 
	
	function __construct(Buy $buy_somethin) {
        $this->buy_somethin  = $buy_somethin;
    }
	
	 function execute() {
        $this->buy_somethin>lookForSomething();
        $this->buy_somethin>choiseBetterSomething();
        $this->buy_somethin>paySomething();
    }
}

$buySomething = new BuyCommand(new Buy('Something'));