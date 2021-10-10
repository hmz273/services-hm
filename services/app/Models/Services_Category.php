<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SearchUser;

class Services_Category extends Model
{
    use HasFactory;
    use Search;
    protected $guarded = ['id'];
    protected $searchable = [
            'name',
        ];
    // protected $searchable 
}
