<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }
    public function index(Product $product)
    {
        return $product->reviews;
    }
    public function store(Product $product, StoreReviewRequest $request)
    {
        if ($request->has("body"))
        {
            $body = $request->body;
        }
        $product->reviews()->create([
            "user_id" => auth()->user()->id,
            "raiting" => $request->raiting,
            "body" => $body??null,
        ]);
        return response()->json([
            "status"=> true,
        ]);
    }
}
