<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Livewire\HomeComponent;
// use App\Models\Services_Category;
use App\Models\Job;
// use App\Http\Livewire\Admin\AdminAddPrvComponent;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class HomeComponent extends Component
{
    // public $searchTerm;
    // public $prvs;
    use WithPagination;

    public function render()
    {
        return 
        view('livewire.home-component',[
            'jobs' => Job::paginate(4)
            // 'prvs' => Prv::paginate(2)
        ])->layout('layouts.base');
    }


    public function mount()
    {
        $this->jobs = Job::paginate(4);
        // ->prvs = Prv::paginate(10);

        // $prvs = Prv::join('services__categories', 'services__categories.id', '=', 'prvs.svr_id')
        //  ->get(['services__categories.slug','prvs.*']);
         return view('livewire.home-component');
    }
}
