<?php

namespace App\Models;
use Codeigniter\Model;


class M_auth_groups extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "auth_groups";
    protected $primaryKey     = 'id';
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = ['id', 'name', 'description'];


}
