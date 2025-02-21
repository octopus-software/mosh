<?php

namespace App\Http\Controllers\Flavour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Flavour\FlavourUpdateRequest;
use App\Models\Flavour;
use Illuminate\Http\Request;

class FlavourUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FlavourUpdateRequest $request, int $id)
    {
        Flavour::query()
        ->where('id',$id)
        ->update([
            'is_fixed' => $request['is_fixed'],
            'name' => $request['name'],
            'shop_id' => $request['shop_id'],
            'manufacturer_id' => $request['manufacturer_id'],
            'name' => $request['name'],
            'category_id' => $request['category_id'],
            'minimum_quantity' => $request['minimum_quantity'],
            'is_active' => $request['is_active'],
        ]);

        return $request->input();
    }
}
