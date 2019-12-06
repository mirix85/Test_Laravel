<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UsersProfile;

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
        $userId = Auth::id();

        UsersProfile::updateOrCreate(['user_id' => $userId], [
            'name' => $name,
            'surname' => $surname,
            'patronymic' => $patronymic,
            'birthday' => $birthday,
            'status' => $status,
            'avatar_img' => $img_path,
            'user_id' => $userId
        ]);

        return redirect('social');
    }
}
