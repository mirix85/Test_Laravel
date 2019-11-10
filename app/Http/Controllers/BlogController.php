<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function edit()
    {
        $name = $_POST['name'];
        $text = $_POST['text'];
        DB::table('test')->insert(['name' => $name, 'text' => $text]);

        $select = DB::table('test')->get();

        return view('blog')->with('select', $select);
    }

    public function show() {
        $select = DB::table('test')->get();

        return view('blog')->with('select', $select);
    }
}
