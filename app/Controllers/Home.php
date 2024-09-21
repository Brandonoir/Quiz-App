<?php namespace App\Controllers;

use App\Models\Answers_model;

class Home extends BaseController
{
    public function index() {
        
        echo view('Sections/header');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $score = $this->getScore();

            $data=['score' => $score];
            echo view('test-view', $data);
        } else {
            echo view('Home/index');
        }
        echo view('Sections/footer');
    }
    
    public function getScore() {
        $uAnswers = $_POST;
        $answersModel = new Answers_model;
        $score = $answersModel->checkAnswers($uAnswers);
        // $data = ['score' => $score];
        return $score;
    }
}
