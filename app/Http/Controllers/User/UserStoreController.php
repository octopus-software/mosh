<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserStoreController extends Controller
{
    public function __invoke(UserStoreRequest $request){
        User::query()->create([
            'position_id' => $request['position_id'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'nickname' => $request['nickname'],
            'gender' => $request['gender'],
            'birthday' => $request['birthday'],
            'email' => $request['email'],
            'staff_code' => $request['staff_code'],
            'profile_image_url' => $request['profile_image_url'],
            'is_active' => 1,
            'password' => bcrypt($request['password'])
        ]);
        return $request->input();
    }
}
