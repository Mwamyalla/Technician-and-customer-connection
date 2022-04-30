<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use Livewire\withPagination;

class AdminServiceCategoryComponent extends Component
{
    use withPagination;
    public function render()
    {
        $scategories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component',['scategories'=>$scategories])->layout('layouts.admin');
    }
}
