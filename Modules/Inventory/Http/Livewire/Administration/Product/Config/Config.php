<?php

namespace Modules\Inventory\Http\Livewire\Administration\Product\Config;
use Modules\Inventory\Entities\Product as productDb;

use Livewire\Component;

class Config extends Component
{
    public $product_id;
    public $product;

    public function mount()
    {
        $this->product=productDb::find($this->product_id);
    }

    public function render()
    {
        return view('inventory::livewire.administration.product.config.config');
    }
}