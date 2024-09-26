<?php namespace App\Controllers;

use App\Models\TestModel;

class Home extends BaseController
{
    public function index() {
        $data = [
            'css' => 'css/Home.css'
        ];

        echo view('Sections/header', $data);
        echo view('Home/admin');
        echo view('Sections/footer');
    }

    public function saveTest(){
        $testModel = new TestModel();
        $testData = [
            'test_title' => $this->request->getPost('test-title'),
            'description' => $this->request->getPost('test-description')
        ];
        $testModel->save($testData);
        $testId = $testModel->where('test_title', $this->request->getPost('test-title'))->first()['id'];

        $data = [
            'css' => 'css/Home.css',
            'testId' => $testId,
            'testTitle' => $testData['test_title']
        ];

        echo view('Sections/header', $data);
        echo view('Home/test-saved', $data);
        echo view('Sections/footer');
    }
}
