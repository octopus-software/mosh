<?php

namespace App\Http\Controllers\Flavour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Flavour\FlavourStoreRequest;
use App\Models\Flavour;
use Illuminate\Http\Request;

class FlavourStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FlavourStoreRequest $request)
    {
        Flavour::query()
        ->create([
            "is_fixed"         => $request['is_fixed'],
            "shop_id"          => $request['shop_id'],
            "manufacturer_id"  => $request['manufacturer_id'],
            "name"             => $request['name'],
            "category_id"      => $request['category_id'],
            "minimum_quantity" => $request['minimum_quantity'],
            "is_active"        => 1
        ]);

        return $request->input();
    }
}
