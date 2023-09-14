<?php

namespace App\Models;
use Codeigniter\Model;


class M_aset extends Model
{

    protected $DBGroup          = 'default';
    protected $table          = "aset";
    protected $primaryKey     = 'id_aset';
    protected $protectFields    = false;
    protected $returnType     = 'array';
    protected $allowedFields  = 
    [
        'id_divisi',
        'id_prioritas',
        'id_ekonomis',
        'id_kondisi_aset',
        'nama_aset',
        'merk',
        'type',
        'serial_number',
        'masuk',
        'habis',
        'harga',
        'keterangan',
        'status'
    ];



}
