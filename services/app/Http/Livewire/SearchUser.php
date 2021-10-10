<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Search;
// use App\Models\Services_Category;
use Livewire\Component;

class SearchUser extends Component
{
    public $term = "";

    public function render()
    {
        sleep(1);
        $jobs = Job::search($this->term)->paginate(10);
        // $scategories = Services_Category::search($this->term)->paginate(10);

        $data = [
            'jobs' => $jobs,
            // 'SELECT prvs.*, users.* 
            // FROM prvs
            // INNER JOIN users on users.id = prvs.user,
            // WHERE prvs.ville LIKE '%<SEARCH TEXT>%' ,
            // OR prvs.title LIKE '%<SEARCH TEXT>%' 
            // OR prvs.tags LIKE '%<SEARCH TEXT>%' 
            // OR prvs.description LIKE '%<SEARCH TEXT>%' 
            // OR users.username = '<USER ID>' 
            // ORDER BY prvs.id 
            // DESC'
            // 'scategories' => $scategories,
        //     $prvs = Search::join('services__categories', 'services__categories.id', '=', 'prvs.svr_id')
        //  ->get(['services__categories.slug','prvs.*'])
        //  INNER JOIN 'services__categories' <alias> ON 'services__categories.id = prvs.svr_id
        ];
        

        return view('livewire.search-user', $data)->layout('layouts.base');
    }
}