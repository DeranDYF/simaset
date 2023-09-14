<?php

namespace App\Models;
use Codeigniter\Model;


class M_auth_groups_permissions extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "auth_groups_permissions";
    protected $protectFields    = false;
    protected $allowedFields  = ['group_id', 'permissions_id'];




}
