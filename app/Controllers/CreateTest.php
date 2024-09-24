<?php namespace App\Controllers;

class CreateTest extends BaseController {

    public function index() {
        $data = [
            'css' => 'css/CreateTest.css'
        ];

        echo view('Sections/header', $data);
        echo view('CreateTest/index');
        echo view('Sections/footer');
    }

}