<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function edit() {
        $name = $_POST['name'];
        $text = $_POST['text'];
        return view('blog')->with(['name'=>$name, 'text'=>$text]);
    }
}
