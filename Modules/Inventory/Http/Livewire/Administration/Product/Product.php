<?php

namespace Modules\Inventory\Http\Livewire\Administration\Product;

use Livewire\Component;
use Modules\Inventory\Entities\Product as productDb;

class Product extends Component
{
    public $start_date;
    public $end_date;
    public $data;

    public function mount(){
        // $this->data = productDb::all();
    }

    public function render()
    {
        return view('inventory::livewire.administration.product.product');
    }

    public function filter()
    {
        $this->data = productDb::all();
    }
}