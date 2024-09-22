<?php namespace App\Controllers;

class Answers extends BaseController
{
    private $answers = [];
    private $scoreLog = [];

    public function index() {
        $uAnswers = $_POST;
        $answers = $this->correctAnswers();
        $this->correctAnswers();
        $score = $this->checkAnswers($uAnswers);
        $scoreLog = $this->scoreLog;

        $data =['answers' => $answers, 'uAnswers' => $uAnswers, 'score' => $score, 'scoreLog' => $scoreLog];
        echo view('Sections/header');
        echo view('test-view',$data);
        echo view('Sections/footer');
    }

    public function correctAnswers()
    {
        $answers = [];

        $answers['t1-q1'] = 'brandon';
        $answers['t1-q2'] = 'kyle';
        $answers['t1-q3'] = 'pogi';
        $answers['t2-q1'] = 'true';
        $answers['t2-q2'] = 'true';
        $answers['t2-q3'] = 'true';
        $answers['t3-q1'] = ['a1', 'a2', 'a3'];
        $answers['t3-q2'] = ['a1', 'a2', 'a3'];
        $answers['t3-q3'] = ['a1', 'a2', 'a3'];

        $this->answers = $answers;
        return  $this->answers;
    }

    public function checkAnswers(array $uAnswers)
    {
        $answers = $this->correctAnswers();
        $score = 0;

        foreach ($answers as $key => $answer) {
            if (isset($uAnswers[$key])) { 
                $this->scoreLog[] = "Checking $key: "; // Debug statement
                if (is_array($answer)) { 
                    if (count(array_diff($answer, $uAnswers[$key])) === 0 && count(array_diff($uAnswers[$key], $answer)) === 0) { 
                        $score++;
                        $this->scoreLog[] = "Correct!<br>"; // Debug statement
                    } else {
                        $this->scoreLog[] = "Incorrect!<br>"; // Debug statement
                    }
                } else { 
                    if ($answer === $uAnswers[$key]) { 
                        $score++;
                        $this->scoreLog[] = "Correct!<br>"; // Debug statement
                    } else {
                        $this->scoreLog[] = "Incorrect!<br>"; // Debug statement
                    }
                }
            }
        }
        return $score;
    }
}