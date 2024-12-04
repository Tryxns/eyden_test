<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class Image extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'filename',
        'type'
    ];
    function get_jumbotron(){
        return DB::table('images')->latest('created_at')->first();
    }
    
}
