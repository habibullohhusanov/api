<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }
    public function index()
    {
        return ProductResource::collection(Product::paginate(10));
    }

    public function store(StoreProductRequest $request)
    {
        // dd($request);
        $product = Product::create([
            "category_id" => $request->category_id,
            "name" => $request->name,
            "price" => $request->price,
            "count" => $request->count,
        ]);
        return new ProductResource($product);
    }

    public function show(Product $product)
    {
        $showProduct = new ProductResource($product);
        $category = Product::where("category_id", $product->category_id)->paginate(2);
        return $this->response([
            "product" => $showProduct,
            "category" => $category,
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            Storage::delete($image->path);
            $image->delete();
        }
        $product->delete();
        return $this->succes(message: "Product deleted");
    }
}
