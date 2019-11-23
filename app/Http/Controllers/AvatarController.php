<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function show() {
        return view('avatar_upload');
    }

    public function avatarUpload(Request $request) {
        $path = $request->file('image')->store('image_upload', 'public');
        return view('social')->with('path', $path);
    }
}
