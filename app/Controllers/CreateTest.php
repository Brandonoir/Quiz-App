<?php namespace App\Controllers;

class CreateTest extends BaseController {

    public function index(){
        $data = [
            'title' => 'Create Test'
            // 'cssPath' => '/css/create_test.css',
            // 'questionText' => $this->getQuestion()
        ];

        echo view('Sections/header', $data);
        echo view('CreateTest/index');
        echo view('Sections/footer');
    }

    // public function getQuestion(){
    //     $questionForm = $_POST;
    //     $questionText = $questionForm['question-text'];
    //     $answerType = $questionForm['answer-type'];
    //     return $questionText;
    // }

    // public function getAnswer(){
    //     $questionForm = $_POST;
    // }
}