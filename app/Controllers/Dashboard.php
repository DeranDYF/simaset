<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_aset;
use App\Models\M_divisi;
use App\Models\M_pengadaan;
use App\Models\M_PerbaikanPergantian;
use App\Models\User_model;

class Dashboard extends BaseController
{

    protected $db, $prioritas, $kondisi, $masaguna;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->prioritas = $this->db->table('prioritas');
        $this->kondisi = $this->db->table('kondisi_aset');
        $this->masaguna = $this->db->table('tahun_ekonomis');
        $this->persetujuan = $this->db->table('persetujuan');

        $prioritas = $this->prioritas->get();
        $kondisi = $this->kondisi ->get();
        $persetujuan = $this->persetujuan->get();
        
        $this->users = new User_model();
        $this->aset = new M_aset();
        $this->divisi = new M_divisi();
        $this->pengadaan = new M_pengadaan();
        $this->perbaikanPergantian = new M_PerbaikanPergantian();
    }

    public function index()
    {
        $this->data['format_template'] = [
            "title" => "Sistem Informasi Manajemen Aset",
            "head_title" => "Dashboard"
        ];

        $this->data['totalaset'] = $this->aset
        ->where('status', 1)
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->findAll();

        $this->data['asetsgtbaik'] = $this->aset
    
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->where('aset.id_kondisi_aset', 1)
        ->where('status', 1)
        ->findAll();

        $this->data['asetbaik'] = $this->aset
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->where('aset.id_kondisi_aset', 2)
        ->where('status', 1)
        ->findAll();

        $this->data['asetkrgbaik'] = $this->aset
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->where('aset.id_kondisi_aset', 3)
        ->where('status', 1)
        ->findAll();

        $this->data['asetrusak'] = $this->aset
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->where('aset.id_kondisi_aset', 4)
        ->where('status', 1)
        ->findAll();

        $this->data['totalhargaaset'] = $this->aset
        ->selectSum('harga')
        ->where('status', 1)
        ->find();

        $this->data['maxharga'] = $this->aset
        ->selectMax('harga')
        ->where('status', 1)
        ->find();

        $this->data['minharga'] = $this->aset
        ->selectMin('harga')
        ->where('status', 1)
        ->find();

        $this->data['avgharga'] = $this->aset
        ->selectAvg('harga')
        ->where('status', 1)
        ->find();

        $this->data['users'] = $this->users
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
        ->findAll();


        return view('dashboard/views', $this->data);
    }
}
