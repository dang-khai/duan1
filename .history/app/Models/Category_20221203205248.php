<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['id', 'name_cate'];
    public $timestamps = false;

    public function getAllCate()
    {
        return DB::table('category')->get();
    }

    public function addCate($input)
    {
        return DB::table('category')->insert($input);
    }

    public function deleteCategory($id)
    {
        return DB::table('category')->where('id', '=', $id)->delete();
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'id_cate');
    }
}
