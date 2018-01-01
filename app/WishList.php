<?php

namespace App;

class WishList extends Cart
{
    public function addorder($item, $id) {
        $storedItem = ['price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $this->items[$id] = $storedItem;
        $this->totalPrice += $item->price;
    }

    //public function removeitem($id){
    //  $this->totalPrice -= $this->items[$id]['price'];
    //unset($this->items[$id]);
    //}

    public function removeItem($id) {
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}



