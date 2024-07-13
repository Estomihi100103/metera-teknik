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
            'id' => $this->id,
            'product_name' => $this->product_name,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
            'image' => $this->image,
            'deskripsi' => $this->deskripsi,
            'spesipikasi' => $this->spesipikasi,
            'brand_id' => $this->brand_id,
            'katalog' => $this->katalog,
            'varian' => $this->varian,
            'video' => $this->video,
            'published_at' => $this->published_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'links' => [
                'self' => route('show.product', ['product' => $this->slug]),
                'category' => route('category.show', ['category' => $this->category->slug]),
            ],
        ];
    }
}
