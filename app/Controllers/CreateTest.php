<?php namespace App\Controllers;

use App\Models\QuestionModel;

class CreateTest extends BaseController {

    public function index() {
        
        $data = [
            'css' => 'css/CreateTest.css'
        ];

        echo view('Sections/header', $data);
        echo view('CreateTest/index');
        echo view('Sections/footer');
        
    }

    public function getQuestion(){
        $postData = request()->getPost();

        $questionData =[
            'test_id' => 1,
            'question_text' => $postData['question-text'],
            'answer_type' => $postData['answer-type']
        ];

        if($this->request->getMethod() == 'POST'){
            $model = new QuestionModel();
            $model->insert($questionData);
        }


        $data = [
            'css' => 'css/CreateTest.css'
        ];

        echo view('Sections/header', $data);
        echo view('test');
        echo view('Sections/footer');
    }

    public function getAnswer(){
        
    }
}