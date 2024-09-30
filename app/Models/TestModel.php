<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
    protected $table      = 'test_form';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'id',
        'test_title',
        'description'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'test_title' => 'required|min_length[5]|max_length[50]|is_unique[test_form.test_title]',
        'description' => 'required|max_length[200]',    
    ];

    protected $validationMessages = [
        'test_title' => [
        'required' => 'Title must not be empty!',
        'min_length' => 'Title must be at least 5 characters!',
        'max_length' => 'Title must not exceed 50 characters!',
        'is_unique' => 'Title must be unique!'
        ],
        'description' => [
        'required' => 'Test description must not be empty!',
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}