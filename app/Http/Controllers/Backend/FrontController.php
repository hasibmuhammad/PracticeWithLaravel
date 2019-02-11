<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }
}
