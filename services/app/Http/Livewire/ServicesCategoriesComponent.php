<?php

namespace App\Http\Livewire;
use App\Models\Services_Category;

use Livewire\Component;

class ServicesCategoriesComponent extends Component
{
    
    public function render()
    {
        $scategories = Services_Category::all();
        return view('livewire.services-categories-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
