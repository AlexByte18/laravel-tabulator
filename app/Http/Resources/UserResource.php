<?php

namespace App\Http\Resources;

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
            "id" => $this->user_id,
            "name" => $this->name,
            "email" => $this->email,
            "created" => $this->created_at->format("d/m/Y"),
            "relation:role:name" => $this->role->name
        ];
    }
}
