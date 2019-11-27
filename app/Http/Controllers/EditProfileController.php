<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditProfileController extends Controller
{
    public function show() {
        return view('edit_profile');
    }

    public function edit(Request $request) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $birthday = $_POST['birthday'];
        $status = $_POST['status'];
        $img_path = $request->file('image')->store('image_upload', 'public');

        DB::table('users_profiles')->insert(
            [
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic,
                'birthday' => $birthday,
                'status' => $status,
                'avatar_img' => $img_path
            ]
        );

        return redirect('social');
//        return view('social')->with('avatar', $img_path);
    }
}
