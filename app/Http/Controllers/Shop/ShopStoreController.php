<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ShopStoreRequest;
use App\Models\Shop;

class ShopStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ShopStoreRequest $request)
    {
        Shop::query()
        ->create([
            'name' => $request['name']
        ]);

        return $request->input();
    }
}
