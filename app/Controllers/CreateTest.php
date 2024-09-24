<?php namespace App\Controllers;

class CreateTest extends BaseController {

    public function index() {
        echo view('Sections/header');
        echo view('CreateTest/index');
        echo view('Sections/footer');
    }

}