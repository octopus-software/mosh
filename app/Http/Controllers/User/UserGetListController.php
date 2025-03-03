<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class UserGetListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $shops = Shop::with(['users' => function ($query) {
            $query->with('positions:id,name');
        }])->get();

        $formatted_data = $shops->map( function ($shop) {
            return [
                'shop_id' => $shop->id,
                'name'    => $shop->name,
                'staffs'  => $shop->users->map( function ($staff){
                    return [
                        'id'                => $staff->id,
                        'position_name'     => $staff->positions->name,
                        'nickname'          => $staff->nickname,
                        'profile_image_url' => $staff->profile_image_url,
                        'is_active'         => $staff->is_active
                    ];
                })
            ];
        });
        return $formatted_data;
    }
}
