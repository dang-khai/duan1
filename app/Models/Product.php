<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = ['id', 'id_cate','name','year','color','description','price'];
    public $timestamps = false;
}
