<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopGetEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $id)
    {
        return Shop::query()
        ->where('id',$id)
        ->first();
    }
}
