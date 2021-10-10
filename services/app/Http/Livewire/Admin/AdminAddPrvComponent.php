<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Prv;
use App\Models\Services_Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class AdminAddPrvComponent extends Component
{
    use WithFileUploads;
    public $ville, $exp, $fname, $phone, $prv_id,$svr_id, $scategories;
    public $isModalOpen = 0;

    use WithPagination;
    public function render()
    {
        return view('livewire.admin.admin-add-prv-component', [
            'prvs' => Prv::paginate(10),
            'scategories' => Services_Category::paginate(10)
        ])->layout('layouts.base');
    }

    public function __construct()
    {
	$this->scategories = Services_Category::all();
    }

    public function mount()
    {
        $this->prvs = Prv::paginate(10);
        //  $scategories = Prv::join('services__categories', 'services__categories.id', '=', 'prvs.svr_id')
        // //  ->select('services__categories.name')
        //  ->get(['services__categories.*','prvs.*']);
         return view('livewire.admin.admin-add-prv-component',\compact('scategories'));
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
        $this->ville = '';
        $this->phone = '';
        $this->fname = '';
        $this->exp = '';
        $this->svr_id = '';
        $scategories = Services_Category::latest()->get();
        // $this->image = '';
    }
    
    public function store()
    {
        $this->validate([
            'ville' => 'required',
            'phone' => 'required',
            'fname' => 'required',
            'exp' => 'required',
            'svr_id' => 'required',
            // 'image' => 'required',
        ]);
    
        Prv::updateOrCreate(['id' => $this->prv_id], [
            'ville' => $this->ville,
            'phone' => $this->phone,
            'fname' => $this->fname,
            'exp' => $this->exp,
            'svr_id' => $this->svr_id,
            // 'image' => $this->image,
        ]);

        session()->flash('message', $this->prv_id ? 'category updated.' : 'category created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($prv_id)
    {
        $prv = Prv::findOrFail($prv_id);
        $this->prv_id = $prv_id;
        $this->ville = $prv->ville;
        $this->phone = $prv->phone;
        $this->fname = $prv->fname;
        $this->exp = $prv->exp;
        // $this->image = $user->image;
    
        $this->openModalPopover();
    }
 


    public function delete($prv_id)
    {
        Prv::find($prv_id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
