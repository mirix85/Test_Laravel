<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UsersProfile;

class SocialController extends Controller
{
    public function show()
    {
        $userProfile = UsersProfile::where('user_id', 2)->get();

        dd($userProfile);
        exit();

        foreach ($userProfile as $userData) {
//            return view('/social')->with([
//                'name' => $userData->name,
//                'surname' => $userData->surname,
//                'patronymic' => $userData->patronymic,
//                'birthday' => $userData->birthday,
//                'status' => $userData->status,
//                'img_path' => $userData->avatar_img,
//            ]);
        }
    }
}
