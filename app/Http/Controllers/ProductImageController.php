<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Resources\ProductResource;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreImageRequest $request, Product $product)
    {
        $number = 1;
        foreach ($request->images as $image) {
            $name = time() . $number . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('products/' . $product->id, $name);
            $bbn = $product->images()->create([
                "path" => $path,
                "name"=> $product->name,
            ]);
            $number++;
        }
        return new ProductResource($product);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Product $product, Image $image)
    {
        Storage::delete($image->path);
        $image->delete();
        return $this->succes(message: $product->name." ning rasmi o'chirildi");
    }
}
