<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class CartCell extends Cell
{
    protected $cart = array();
    protected $totalHarga = 0;
    protected $showDiscount = false;

    public function mount()
    {
        // Simulasi mengambil data produk
        $this->cart = [            
            ['pid'=>1, 'name'=>'Laptop', 'price'=> 15000000, 'quantity'=>2],
            ['pid'=>2, 'name'=>'PC', 'price'=> 21000000, 'quantity'=>1]
        ];
    }

    public function getCartProperty()
    {
        return $this->cart;
    }

    public function getTotalHargaProperty()
    {
        foreach($this->cart as $row)
        {
            $this->totalHarga = $this->totalHarga + $row['price'] * $row['quantity'];
        };
        return $this->totalHarga;
    }

    public function tambahQuantity($pid)
    {
        foreach($this->cart as $key => $row)
        {
            if($this->cart[$key]['pid'] == $pid){
                $this->cart[$key]['quantity'] = $this->cart[$key]['quantity'] + 1;
            }
        }


    }
}
