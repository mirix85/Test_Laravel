<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function show() {
        echo 'Вы на странице Page 1...';
    }
}
