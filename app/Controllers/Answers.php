<?php

namespace App\Controllers;

class Answers extends BaseController {
    private $answers=[];

    public function correctAnswers(){
        $answers=[];

        $answers['q1-a1'] = 'brandon';
        $answers['q1-a2'] = 'kyle';
        $answers['q1-a3'] = 'pogi';
        $answers['q2-a1'] = 'true';
        $answers['q2-a2'] = 'true';
        $answers['q2-a3'] = 'true';
        $answers['q3-a1'] = [];
        $answers['q3-a1'][] = 'a1';
        $answers['q3-a1'][] = 'a2';
        $answers['q3-a1'][] = 'a3';
        $answers['q3-a2'] = [];
        $answers['q3-a2'][] = 'a1';
        $answers['q3-a2'][] = 'a2';
        $answers['q3-a2'][] = 'a3';
        $answers['q3-a3'] = [];
        $answers['q3-a3'][] = 'a1';
        $answers['q3-a3'][] = 'a2';
        $answers['q3-a3'][] = 'a3';

        print_r($answers);
        $this->answers = $answers;
        return view('test.php');
    }

    public function checkAnswers(array $uAnswers){
        $answers = $this->answers;
        $score;

        foreach($answers as $answer){
            foreach($uAnswers as $uAnswer){
                if($answer === $uAnswer){
                    $score++;
                } 
            }
        }
        return $score;
    }
}