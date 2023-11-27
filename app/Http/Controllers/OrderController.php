<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
        $this->authorizeResource(Order::class);
    }

    public function index()
    {
        return OrderResource::collection(auth()->user()->orders()->paginate(10));
    }

    public function store(StoreOrderRequest $request)
    {
        if (!auth()->user()->hasOrders($request->product_id)) {
            Order::create([
                "user_id" => $this->auth(),
                "product_id" => $request->product_id,
            ]);
            return $this->succes();
        } else {
            return $this->error("Already exsist");
        }
    }

    public function show(Order $order)
    {
        //
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        if (auth()->user()->hasOrders($order->id)) {
            $order->delete();
            return $this->succes();
        } else {
            return $this->error("Not found");
        }
    }
}
