<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResoucre extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //default//
        //for this we just create ProductResoucre 
        //return parent::toArray($request);

        //for this we have to use ProductResoucre::collection
        return [
            "id" => $this->id,
            "full_name" => $this->name,
            //relationship
            "images" => ImageResource::collection($this->images)
        ];
    }
}
