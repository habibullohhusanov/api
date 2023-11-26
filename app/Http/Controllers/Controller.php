<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function succes(string $message = null, array $data = null)
    {
        return response()->json([
            "succes" => true,
            "message"=> $message,
            "data"=> $data,
        ]);
    }
    public function error(string $message = null, array $data = null)
    {
        return response()->json([
            "succes" => false,
            "message"=> $message,
            "data"=> $data,
        ]);
    }
}
