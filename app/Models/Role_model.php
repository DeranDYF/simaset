<?php

namespace App\Models;

use Codeigniter\Model;


class Role_model extends Model
{

    protected $table = "auth_groups";
    protected $allowedFields = ['name', 'description'];



}
