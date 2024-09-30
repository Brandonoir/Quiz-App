<?php namespace App\Controllers;

class CreateQuestion extends BaseController {
   public function index() {
        $session = session();
        $testTitle = $session->get('testTitle');
        $testId = $session->get('testId');

        $data = [
            'css' => 'css/CreateQuestion.css',
            'testTitle' => $testTitle,
            'testId' => $testId
        ];

        print_r($_SESSION);

        echo view('Sections/header', $data);
        echo view('CreateQuestion/index', $data);
        echo view('Sections/footer');
    }
}