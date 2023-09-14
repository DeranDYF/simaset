<?php

namespace App\Models;
use Codeigniter\Model;


class M_auth_groups_users extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "auth_groups_users";
    protected $primaryKey     = 'agu_id';
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = ['agu_id','group_id', 'user_id'];



}
