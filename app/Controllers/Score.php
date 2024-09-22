<?php namespace App\Controllers;

class Score extends BaseController {
    public function index(){
        $data = [
            'name' => 'brandon'
        ];
        echo view('Sections/header');
        echo view('test-view', $data);
        echo view('Sections/footer');
    }
}
