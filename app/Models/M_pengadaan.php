<?php

namespace App\Models;
use Codeigniter\Model;


class M_pengadaan extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "form_pengadaan";
    protected $primaryKey     = 'id_pengadaan';
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = 
    [
        'nama_aset',
        'id_divisi',
        'harga_aset',
        'tanggal_pengadaan',
        'keterangan',
        'id_persetujuan',
        'active',

    ];



}
