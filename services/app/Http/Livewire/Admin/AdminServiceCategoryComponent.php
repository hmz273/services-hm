<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Services_Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class AdminServiceCategoryComponent extends Component
{
    use WithFileUploads;
    public $name, $slug, $image, $scategory_id;
    public $isModalOpen = 0;
    // public $search;

    use WithPagination;
    public function render()
    {
        // $searchTerm = '%'.$this->searchTerm . '%';
        // $scategories = Services_Category::where('name',$this->search)->get();
        // ->orderBy('id','DESC')->get();
        return view('livewire.admin.admin-service-category-component', [
            'scategories' => Services_Category::paginate(10)
        ])->layout('layouts.base');
        // $scategories = Services_Category::paginate(10);
        // return view('livewire.admin.admin-service-category-component', ['scategories'=>$scategories])->layout('layouts.base');
    }

    public function mount()
    {
        $this->scategories = Services_Category::paginate(10);
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->slug = '';
        $this->image = '';
    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
        ]);
    
        Services_Category::updateOrCreate(['id' => $this->scategory_id], [
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $this->image,
        ]);

        session()->flash('message', $this->scategory_id ? 'category updated.' : 'category created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($category_id)
    {
        $category = Services_Category::findOrFail($category_id);
        $this->scategory_id = $category_id;
        $this->name = $scategory->name;
        $this->slug = $scategory->slug;
        $this->image = $scategory->image;
    
        $this->openModalPopover();
    }
 


    public function delete($category_id)
    {
        Services_Category::find($category_id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
