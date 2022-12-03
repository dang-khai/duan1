<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\ImageCollection;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
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
            'cate' => new CategoryCollection(Category::findOrFail($this->id_cate)),
            'name' => $this->name,
            'year' => $this->year,
            'color' => $this->color,
            'description' => $this->description,
            'status' => $this->status,
            'price' => $this->price,
            'img' => DB::table('image')->where('id_product', $this->id)->get('url'),
        ];
    }
}
