<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Text extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'content',
        'type'
    ];
}
