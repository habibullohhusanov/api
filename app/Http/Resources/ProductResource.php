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
            "category" => new CategoryRecource($this->category),
            "stock" => StockRecource::collection($this->stock),
            "count" => $this->count,
        ];
    }
}
