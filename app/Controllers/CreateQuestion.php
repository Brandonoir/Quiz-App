<?php namespace App\Controllers;

use App\Models\QuestionModel;

class CreateQuestion extends BaseController {
    public function index() {
        $data = [
            'css' => 'css/CreateQuestion.css'
        ];

        echo view('Sections/header', $data);
        echo view('CreateQuestion/index');
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