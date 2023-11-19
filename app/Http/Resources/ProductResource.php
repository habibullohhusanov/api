<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->getTranslations("name"),
            "price" => $this->price,
            "category" => new CategoryResource($this->category),
            "stock" => StockResource::collection($this->stock),
            "count" => $this->count,
        ];
    }
}