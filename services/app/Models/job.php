<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use Search;
    use HasFactory;
    protected $guarded = ['id'];
    protected $searchable = [
    //     'svr_id',
        'service',
        // 'phone',
        // 'exp',
        'ville',
    ];
}
