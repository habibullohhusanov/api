<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function auth()
    {
        return auth()->user()->id;
    }
    public function response($data)
    {
        return response()->json([
            "data"=> $data,
        ]);
    }
    public function succes($data = null, string $message = null)
    {
        return response()->json([
            "succes" => true,
            "data"=> $data,
            "message"=> $message,
        ]);
    }
    public function error(string $message = null, $data = null)
    {
        return response()->json([
            "succes" => false,
            "message"=> $message,
            "data"=> $data,
        ]);
    }
}
