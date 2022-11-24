<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "image";
    public $timestamps = false;

    public function addImage($input){
        return DB::table('image')->insert($input);
    }
    
}
