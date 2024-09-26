<?php namespace App\Controllers;

use App\Models\QuestionModel;

class CreateQuestion extends BaseController {
    private $testTitle;
    private $testId;

    public function index() {
        $this->testTitle = $this->request->getPost('test-title');
        $this->testId = $this->request->getPost('testId');

        $data = [
            'css' => 'css/CreateQuestion.css',
            'testTitle' => $this->testTitle
        ];

        echo view('Sections/header', $data);
        echo view('CreateQuestion/index', $data);
        echo view('Sections/footer');
    }

    public function getQuestion(){

        $model = new QuestionModel();
        $questionData =[
            'test_id' => $this->testId,
            'question_text' => $this->request->getPost('question-text'),
            'answer_type' => $this->request->getPost('answer-type')
        ];
    
        $model->save($questionData);
        
        $data = [
            'css' => 'css/Home.css'
        ];
    
        echo view('Sections/header', $data);
        echo view('test');
        echo view('Sections/footer');
    }

    public function getAnswer(){
        
    }
}