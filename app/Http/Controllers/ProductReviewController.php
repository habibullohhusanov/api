<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
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
        return response([
            "avg" => $product->reviews()->avg("raiting"),
            "count" => $product->reviews()->count(),
            "reviews" => ReviewResource::collection($product->reviews()->paginate(2)),
        ]);
    }
    public function show(Product $product)
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
            "succes"=> true,
        ]);
    }
}
