<?php

namespace Modules\Inventory\Http\Livewire\Administration\Category;

use Livewire\Component;
use Modules\Inventory\Entities\Category as categoryDb;

class Category extends Component
{

    public $categories;
    public $categoryId, $name, $description;

    public function __construct()
    {
        $this->categories = categoryDb::whereNull('deleted_at')->get();
    }

    public function render()
    {
        $this->loadCategories();
        return view('inventory::livewire.administration.category.category');
    }

    public function loadCategories()
    {
        $this->categories = categoryDb::whereNull('deleted_at')->get();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $category = categoryDb::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        if ($category) {
            session()->flash('success', 'La categoría ha sido creada correctamente.');
        } else {
            session()->flash('error', 'Hubo un problema al crear la categoría.');
        }

        $this->loadCategories();
        $this->closeModal();

    }

    public function update()
    {
        $this->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $category = categoryDb::findOrFail($this->categoryId);
        $category->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        if ($category) {
            session()->flash('success', 'La categoría ha sido actualizada correctamente.');
        } else {
            session()->flash('error', 'Hubo un problema al actualizar la categoría.');
        }

        $this->loadCategories();
        $this->closeModal();
    }

    public function delete($categoryId)
    {
        $category = categoryDb::findOrFail($categoryId);
        $category->delete();
        if ($category) {
            session()->flash('success', 'La categoría ha sido eliminada correctamente.');
        } else {
            session()->flash('error', 'Hubo un problema al eliminar la categoría.');
        }

    }

    public function openCategoryModal($categoryId = null)
    {
        if ($categoryId) {
            $category = categoryDb::findOrFail($categoryId);
            $this->categoryId = $category->id;
            $this->name = $category->name;
            $this->description = $category->description;
            $this->isEditing = true;
        } else {
            $this->categoryId = null;
            $this->name = '';
            $this->description = '';
            $this->isEditing = false;
        }
        $this->emit('openCategoryModal');
    }

    public function closeModal()
    {
        $this->categoryId = null;
        $this->name = '';
        $this->description = '';
        $this->emit('closeCategoryModal');
    }
}