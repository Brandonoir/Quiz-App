<?php namespace App\Controllers;

// use App\Models\Answers_model;

class Home extends BaseController
{
    public function index() {
        
        echo view('Sections/header');
        echo view('Home/index');
        echo view('Sections/footer');
    }
}
