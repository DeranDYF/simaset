<?php

namespace App\Models;
use Codeigniter\Model;


class M_divisi extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "tb_divisi";
    protected $primaryKey     = 'id_divisi';
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = ['nama_divisi'];



}
