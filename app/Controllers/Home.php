<?php namespace App\Controllers;

// use App\Models\Answers_model;

class Home extends BaseController
{
    public function index() {
        
        echo view('Sections/header');
        echo view('Home/index');
        echo view('Sections/footer');
    }
    
    // public function getScore() {
    //     $uAnswers = $_POST;
    //     $this->load->model('Answers_model');
    //     $score = $this->Answers_model->checkAnswers($uAnswers);
    //     // $data = ['score' => $score];

    //     return $score;
    // }
}
