<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UserUpdateRequest $request, int $id)
    {
        User::query()
        ->where('id', $id)
        ->update([
            'position_id' => $request['position_id'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'nickname' => $request['nickname'],
            'gender' => $request['gender'],
            'birthday' => $request['birthday'],
            'email' => $request['email'],
            'staff_code' => $request['staff_code'],
            'profile_image_url' => $request['profile_image_url'],
            'is_active' => $request['is_active'],
            'password' => bcrypt($request['password'])
        ]);
        return $request->input();
    }
}
