<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'joined_at' => $this->created_at->format('d-m-Y'),
            'orders' => $this->orders->count(),
            'phone' => $this->phone,
            'email' => $this->email,
        ];
    }
}
