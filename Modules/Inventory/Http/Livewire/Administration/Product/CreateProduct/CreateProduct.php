<?php

namespace Modules\Inventory\Http\Livewire\Administration\Product\CreateProduct;

use Livewire\Component;

class CreateProduct extends Component
{
    public $attributes = [];
    public $attributeName;
    public $attributeDescription;
    public $editIndex = null;

    public function render()
    {
        return view('inventory::livewire.administration.product.create-product.create-product');
    }

    public function addAttribute()
    {
        if ($this->editIndex !== null) {
            $this->attributes[$this->editIndex]['name'] = $this->attributeName;
            $this->attributes[$this->editIndex]['description'] = $this->attributeDescription;
            $this->editIndex = null;
        } else {
            $this->attributes[] = [
                'name' => $this->attributeName,
                'description' => $this->attributeDescription
            ];
        }

        // Limpiamos los campos después de agregar o editar el atributo
        $this->attributeName = '';
        $this->attributeDescription = '';
    }

    public function startEdit($index)
    {
        $this->editIndex = $index;
        $this->attributeName = $this->attributes[$index]['name'];
        $this->attributeDescription = $this->attributes[$index]['description'];
    }


    public function stopEdit()
    {
        $this->editIndex = null;
        $this->attributeName = '';
        $this->attributeDescription = '';
    }

    public function saveAttribute()
    {
        $attribute = [
            'name' => $this->attributeName,
            'description' => $this->attributeDescription,
        ];

        $this->attributes[$this->editIndex] = $attribute;
        $this->editIndex = null;
        $this->attributeName = '';
        $this->attributeDescription = '';
    }

    public function deleteAttribute($index)
    {
        unset($this->attributes[$index]);
    }
}