<?php

namespace App\Http\Controllers\Flavour;

use App\Http\Controllers\Controller;
use App\Models\Flavour;
use Illuminate\Http\Request;

class FlavourGetEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $id)
    {
        return Flavour::query()
        ->where('id',$id)
        ->first();
    }
}
