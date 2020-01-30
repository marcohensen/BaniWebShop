<?php

namespace App;


class Cart
{
    public $items = null;
    public $totAantal = 0;
    public $totPrijs = 0;
    public $totBtw = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totAantal = $oldCart->totAantal;
            $this->totPrijs = $oldCart->totPrijs;
            $this->totBtw = $oldCart->totBtw;
        }
    }

    public function add($item, $id)
    {
        $storeditem = ['aantal' => 0, 'prijs' => $item->prijs, 'items' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeditem = $this->items[$id];
            }
        }
        $storeditem['aantal']++;
        $storeditem['prijs'] = $item->prijs * $storeditem['aantal'];
        $this->items[$id] = $storeditem;
        $this->totAantal++;
        $this->totPrijs += $item->prijs;
    }

    public function reduce($id) {
        $this->items[$id]['aantal']--;
        $this->items[$id]['prijs'] -= $this->items[$id]['items']['prijs'];
        $this->totAantal--;
        $this->totPrijs -= $this->items[$id]['items']['prijs'];
    }

    public function remove($id) {
        $this->totAantal-= $this->items[$id]['aantal'];
        $this->totPrijs -= $this->items[$id]['prijs'];
        unset($this->items[$id]);
    }
}
