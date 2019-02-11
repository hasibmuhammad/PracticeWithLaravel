<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $data = [];
        $data['links'] = [
            'Facebook' => 'https://facebook.com',
            'Twitter' => 'https://twitter.com',
            'Pinterest' => 'https://pinterest.com',
            'Instagram' => 'https://instagram.com',
        ];
        $data['date'] = date('d - m - Y -- H : i : s');
        $data['entryTitle'] = "Blog Post";
        return view('welcome', $data);
    }
    public function post()
    {
        $data = [];
        $data['links'] = [
            'Facebook' => 'https://facebook.com',
            'Twitter' => 'https://twitter.com',
            'Pinterest' => 'https://pinterest.com',
            'Instagram' => 'https://instagram.com',
        ];
        $data['date'] = date('d - m - Y -- H : i : s');
        $data['entryTitle'] = "Blog Post";
        return view('posts', $data);
    }

    public function showRegistrationForm()
    {
        $data = [];
        $data['links'] = [
            'Facebook' => 'https://facebook.com',
            'Twitter' => 'https://twitter.com',
            'Pinterest' => 'https://pinterest.com',
            'Instagram' => 'https://instagram.com',
        ];
        $data['date'] = date('d - m - Y -- H : i : s');
        $data['entryTitle'] = "Blog Post";
        return view('registrationForm',$data);
    }
}
