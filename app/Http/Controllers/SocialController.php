<?php

namespace App\Http\Controllers;

use App\UsersProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function show()
    {
        $userProfile = UsersProfile::where('user_id', 1)->value('user_id');

        if (!empty($userProfile)) {
            foreach (UsersProfile::where('user_id', 1)->get() as $userData) {
                return view('/social')->with([
                    'name' => $userData->name,
                    'surname' => $userData->surname,
                    'patronymic' => $userData->patronymic,
                    'birthday' => $userData->birthday,
                    'status' => $userData->status,
                    'img_path' => $userData->avatar_img,
                ]);
            }
        } else {
            return view('/social');
        }
    }
}
