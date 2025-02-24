<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ShopUpdateRequest;
use App\Models\Shop;

class ShopUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ShopUpdateRequest $request, int $id)
    {
        Shop::query()
        ->where('id',$id)
        ->update([
            'name' => $request['name']
        ]);

        return $request->input();
    }
}
