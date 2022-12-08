<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\ImageCollection;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'hangXe' => new CategoryCollection(Category::findOrFail($this->id_cate)),
            'tenXe' => $this->name,
            'namSX' => $this->year,
            'slug' => Str::slug($this->name),
            'color' => $this->color,
            'description' => $this->description,
            'status' => $this->status == '0' ? 'Xe mới' : 'Xe cũ',
            'giaXe' => $this->price,
            'hinhXe' => DB::table('image')->where('id_product', $this->id)->get('url'),
        ];
    }
}
