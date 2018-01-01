<?php

namespace App;


Abstract class Cart
{
    public $items = null;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    Abstract public function addorder($items,$id);
    Abstract public function removeItem($id);

}
