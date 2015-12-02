<?php 
class ProductOrderFacade {
     
    public $productID = '';
     
    public function __construct($pID) {
        $this->productID = $pID;
    }
     
    public function generateOrder() {
         
        if($this->qtyCheck()) {
             
            $this->addToCart();
             
            $this->calulateShipping();
             
            $this->applyDiscount();
             
            $this->placeOrder();
             
        }
         
    }
     
    private function addToCart () {}
     
    private function qtyCheck() {}
     
     
    private function calulateShipping() {
        $shipping = new shippingCharge();
        $shipping->calculateCharge();
    }
     
    private function applyDiscount() {
        $discount = new discount();
        $discount->applyDiscount();
    }
     
    private function placeOrder() {
        $order = new order();
        $order->generateOrder();
    }
}

$productID = $_GET['productId'];
 
$order = new productOrderFacade($productID);
$order->generateOrder();