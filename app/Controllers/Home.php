<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('about');
    }

    public function login() {
        return view('login');
    }

    public function test() {
        return view('test-page');
    }

}
