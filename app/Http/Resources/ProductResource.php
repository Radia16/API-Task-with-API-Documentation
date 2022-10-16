<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'item_id' => $this->item_id,
            'title' => $this->title,
            'category_id' => $this->category_id,
            'category'=> new CategoryResource($this->whenLoaded('category')),
            'sub_category_id' => $this->sub_category_id,
            'subcategory'=> new SubCategoryResource($this->whenLoaded('subcategory')),
            'nagotiable' => $this->nagotiable,
            'price' => $this->price,
            'condition' => $this->condition,
            'description' => $this->description,
            'min_quality' => $this->min_quality,
            'validity' => $this->validity
        ];
    }
}
