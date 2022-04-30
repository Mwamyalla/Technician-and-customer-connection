<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditServiceCategoryComponent extends Component
{
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newImage;
    public function render()
    {

        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.admin');
    }
}
