<?php namespace App\Controllers;

class CreateQuestion extends BaseController {
    private $testTitle;
    private $testId;

    public function index() {
        $session = session();
        $this->testTitle = $this->request->getPost('test-title');
        $this->testId = $this->request->getPost('testId');
        $session->set('testTitle' , $this->testTitle);
        $session->set('testId' , $this->testId);

        $data = [
            'css' => 'css/CreateQuestion.css',
            'testTitle' => $session->get('testTitle'),
            'testId' => $session->get('testId')
        ];

        print_r($_SESSION);

        echo view('Sections/header', $data);
        echo view('CreateQuestion/index', $data);
        echo view('Sections/footer');
    }
}