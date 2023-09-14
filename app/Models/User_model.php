<?php

namespace App\Models;
use Codeigniter\Model;


class User_model extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "users";
    protected $primaryKey     = 'id';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = ['email', 'username', 'password_hash', 'fullname'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


}
