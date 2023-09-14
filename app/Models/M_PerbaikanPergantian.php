<?php

namespace App\Models;
use Codeigniter\Model;


class M_PerbaikanPergantian extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "form_perbaikan_pergantian";
    protected $primaryKey     = 'id_perbaikan_pergantian';
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = 
    [
        'id_aset',
        'id_pengajuan',
        'tanggal_pengajuan',
        'keterangan',
        'status_pengajuan',
        'active',

    ];



}
