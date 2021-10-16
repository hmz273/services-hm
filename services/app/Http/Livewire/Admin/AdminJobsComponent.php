<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Job;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class AdminJobsComponent extends Component
{
    use WithFileUploads;
    public $ville, $exp, $name, $phone, $service, $image, $simage;
    public $isModalOpen = 0;

    use WithPagination;
    public function render()
    {
        return view('livewire.admin.admin-jobs-component', [
            'jobs' => Job::paginate(10),
        ])->layout('layouts.base');
    }
    
    public function __construct()
    {
	$this->jobs = Job::all();
    }


    public function mount()
    {
        $this->jobs = Job::paginate(10);
         return view('livewire.admin.admin-jobs-component');
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
        $this->name = '';
        $this->exp = '';
        $this->service = '';
        // $scategories = Services_Category::latest()->get();
        $this->image = '';
        // $this->simage = '';
    }
    
    public function store()
    {
        // $this->validate([
        //     'ville' => 'required',
        //     'phone' => 'required',
        //     'name' => 'required',
        //     'exp' => 'required',
        //     'service' => 'required',
        //     'image' => 'required',
        //     'simage' => 'required',
        // ]);
    
        // Job::updateOrCreate(['id' => $this->id], [
        //     'ville' => $this->ville,
        //     'phone' => $this->phone,
        //     'name' => $this->name,
        //     'exp' => $this->exp,
        //     'service' => $this->service,
        //     'image' => $this->image,
        //     'simage' => $this->simage,
        // ]);

        // $image= $this->image->store('public');
        // $simage= $this->simage->store('public');
        $validateData = $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ville' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'exp' => 'required',
            'service' => 'required',
        ]);

        $image = $this->image->store('images', 'public');
        $validateData['image'] = $image;

        Job::create($validateData);
        session()->flash('message', $this->id ? 'category updated.' : 'category created.');
        $this->emit('imageUploaded');


        // session()->flash('message', $this->id ? 'category updated.' : 'category created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $this->id = $id;
        $this->ville = $job->ville;
        $this->phone = $job->phone;
        $this->name = $job->name;
        $this->exp = $job->exp;
        $this->service = $job->service;
        // $this->image = $user->image;
    
        $this->openModalPopover();
    }
 


    public function delete($id)
    {
        Job::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
