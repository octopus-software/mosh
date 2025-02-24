<?php

namespace App\Http\Controllers\Flavour;

use App\Http\Controllers\Controller;
use App\Models\Flavour;
use Illuminate\Http\Request;

class FlavourGetListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Flavour::query()
        ->where('shop_id', $request['shop_id'])
        ->where('is_active',1)
        ->with('shops')
        ->with('manufacturers')
        ->with('categories')
        ->get()
        ->map(function ($flavour) {
            return [
                'id' => $flavour->id,
                'is_fixed' => $flavour->is_fixed,
                'shop_id' => $flavour->shop_id,
                'shop_name' => $flavour->shops->name ?? null, // NULL対策
                'manufacturer_id' => $flavour->manufacturer_id,
                'manufacturer_name' => $flavour->manufacturers->name ?? null,
                'name' => $flavour->name,
                'category_id' => $flavour->category_id,
                'category_name' => $flavour->categories->name ?? null,
                'minimum_quantity' => $flavour->minimum_quantity,
                'is_active' => $flavour->is_active,
                'created_at' => $flavour->created_at,
                'updated_at' => $flavour->updated_at,
            ];
        });
    }
}
