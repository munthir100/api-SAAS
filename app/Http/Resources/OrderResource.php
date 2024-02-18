<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'quantity' => $this->quantity,
            'tenant_id' => $this->tenant_id,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
            'created_at' => $this->created_at,
        ];

    }
}
