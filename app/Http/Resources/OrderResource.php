<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public static $wrap = null; // disables the 'data' key

    public function toArray(Request $request): array
    {
        return [
            'order_id' => $this->id,
            'customer' => [
                'name' => $this->customer->name,
                'email' => $this->customer->email,
            ],
            'order_date' => $this->order_date->format('Y-m-d'),
            'items' => $this->items->map(fn ($i) => [
                'product_name' => $i->product_name,
                'quantity' => $i->quantity,
                'price' => (float) $i->price,
            ]),
            'total' => (float) $this->total,
        ];
    }
}
