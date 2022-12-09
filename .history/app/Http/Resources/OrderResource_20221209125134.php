<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'note' => $this->note,
            'status' => $this->status == 0 ? 'Đang chờ xác nhận' : 'Đã xác nhận',
            'updated_at' => $this->updated_at,
            'updated_at' => date('d-m-Y', strtotime($this->updated_at)),
        ];
    }
}
