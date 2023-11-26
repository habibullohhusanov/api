<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }
    public function index()
    {
        return auth()->user()->favourites()->paginate(2);
    }
    public function store(Request $request)
    {
        if (!auth()->user()->hasFavourites($request->product_id)) {
            auth()->user()->favourites()->attach($request->product_id);
            return $this->succes();
        } else {
            return $this->error("Already exsist");
        }
    }
    public function destroy($id)
    {
        if (auth()->user()->hasFavourites($id)) {
            auth()->user()->favourites()->detach($id);
            return $this->succes();
        } else {
            return $this->error("ANot found");
        }
    }
}
