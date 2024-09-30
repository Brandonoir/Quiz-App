<?php namespace App\Controllers;

use App\Models\QuestionModel;

class SaveQuestion extends BaseController {

    public function index(){
        $testTitle = $_POST['testTitle'];
        $testId = $_POST['testId'];

        $answer = $this->request->getPost('answer');
        $correct_answer = $this->request->getPost('correct_answer');

        if(is_array($answer)){
            $answer = implode(',', $this->request->getPost('answer'));
        }
        if(is_array($correct_answer)){
            $correct_answer = implode(',', $this->request->getPost('correct_answer'));
        }

        $questionModel = new QuestionModel();
        $questionData = [
            'test_id' => $this->request->getPost('testId'),
            'question_text' => $this->request->getPost('question-text'),
            'answer_type' => $this->request->getPost('answer-type'),
            'answer' => $answer,
            'correct_answer' => $correct_answer,
        ];

        $questionModel->insert($questionData);

        $data = [
            'css' => 'css/CreateQuestion.css',
        ];

        return redirect()->back();
    }
}