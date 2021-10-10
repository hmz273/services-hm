<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prv extends Model
{
    use HasFactory;
    use Search;

    protected $guarded = ['id'];
    protected $searchable = [
    //     'svr_id',
        'fname',
        // 'phone',
        // 'exp',
        'ville',
    ];
}
