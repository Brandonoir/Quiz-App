<?php namespace App\Models;

use CodeIgniter\Model;

class Answers_model extends Model
{
    private $answers = [];

    public function correctAnswers()
    {
        $answers = [];

        $answers['q1-a1'] = 'brandon';
        $answers['q1-a2'] = 'kyle';
        $answers['q1-a3'] = 'pogi';
        $answers['q2-a1'] = 'true';
        $answers['q2-a2'] = 'true';
        $answers['q2-a3'] = 'true';
        $answers['q3-a1'] = ['a1', 'a2', 'a3'];
        $answers['q3-a2'] = ['a1', 'a2', 'a3'];
        $answers['q3-a3'] = ['a1', 'a2', 'a3'];

        $this->answers = $answers;
        return  $this->answers;

    }

    public function checkAnswers(array $uAnswers)
    {
        $answers = $this->answers;
        $score = 0;

        foreach ($answers as $key => $answer) {
            if (isset($uAnswers[$key])) { 
                echo "Checking $key: "; // Debug statement
                if (is_array($answer)) { 
                    if (count(array_diff($answer, $uAnswers[$key])) === 0 && count(array_diff($uAnswers[$key], $answer)) === 0) { 
                        $score++;
                        echo "Correct!<br>"; // Debug statement
                    } else {
                        echo "Incorrect!<br>"; // Debug statement
                    }
                } else { 
                    if ($answer === $uAnswers[$key]) { 
                        $score++;
                        echo "Correct!<br>"; // Debug statement
                    } else {
                        echo "Incorrect!<br>"; // Debug statement
                    }
                }
            }
        }
        return $score;
    }
}