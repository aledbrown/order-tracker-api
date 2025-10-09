<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // GET /api/orders/{id}
    public function show($id)
    {
        // findOrFail returns 404 automatically if not found
        $order = Order::with(['customer', 'items'])->findOrFail($id);

        return new OrderResource($order);
    }
}
