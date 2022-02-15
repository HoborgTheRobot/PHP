<?php

class Basket
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;
    public function calculateSubTotal()
    {
        $subTotal = $this->itemsTotal + $this->shippingCost;
        return $subTotal;
    }
    public function calculateDiscount()
    {
        $finalPrice = $this->itemsTotal + $this->shippingCost - $this->discount;
        return $finalPrice;
    }
}

$basket = new Basket();
$basket->itemsTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 30;
var_dump($basket->calculateDiscount());
