<?php namespace App\Controllers;

use App\Models\TestModel;
use Config\Services;

class Home extends BaseController
{
    public function index() {
        $session = session();
        $testModel = new TestModel();
        $tests = $testModel->findAll();

        $data = [
            'tests' => $tests,
            'css' => 'css/HomeAdmin.css'
        ];
        
        if ($session->getFlashdata('errors')) {
            echo '<ul>';
            foreach ($session->getFlashdata('errors') as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
        }
        echo view('Sections/header', $data);
        echo view('Home/admin', $data);
        echo view('Sections/footer');
    }

    public function saveTest(){
        $session = session();
        $testModel = new TestModel();
        $testData = [
            'test_title' => $this->request->getPost('test-title'),
            'description' => $this->request->getPost('test-description')
        ];

        
        if (!$testModel->validate($testData)) {
            $session->setFlashdata('errors', $testModel->errors());
            return redirect()->to('/');
        } else {
            $testModel->save($testData);
            $testId = $testModel->where('test_title', $this->request->getPost('test-title'))->first()['id'];
    
            $session->set('testTitle' , $testData['test_title']);
            $session->set('testId' , $testId);
    
            return redirect()->to('/create-question');
        }

    }
}
