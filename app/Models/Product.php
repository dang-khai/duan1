<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['id', 'id_cate', 'name', 'year', 'color', 'description', 'price'];
    public $timestamps = false;

    public function getAllProducts()
    {
        return DB::table('product')->get();
    }

    public function addProduct($input)
    {
        return DB::table('product')->insert($input);
    }

    public function deleteProduct($id){
        return DB::table('product')->where('id', '=', $id)->delete();
    }
}
