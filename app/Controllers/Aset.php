<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\M_aset;
use App\Models\M_divisi;
use App\Models\M_pengadaan;
use App\Models\M_PerbaikanPergantian;
class Aset extends BaseController
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
        

        $this->aset = new M_aset();
        $this->divisi = new M_divisi();
        $this->pengadaan = new M_pengadaan();
        $this->perbaikanPergantian = new M_PerbaikanPergantian();
    }

    public function index()
    {

        $this->data['format_template'] = [

            "title" => "Aset | Sistem Informasi Manajemen Aset",
            "head_title" => "Aset",

        ];

        $this->data['aset'] = $this->aset
        ->where('status', 1)
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->findAll();

        $this->data['divisi'] = $this->divisi
        ->findAll();
        $this->data['masaguna'] = $this->masaguna->get()->getResult();
        $this->data['kondisi'] = $this->kondisi->get()->getResult();
        $this->data['prioritas'] = $this->prioritas->get()->getResult();
  

        return view('aset/aset', $this->data);
    }

    public function tambahAset()
    {

        $this->masaguna->select('tahun');
        $this->masaguna->where('id_ekonomis', $this->request->getVar('id_prioritas'));
        $masaguna = $this->masaguna->get();
        $abis = $masaguna->getResultArray();
        $this->aset->insert([
            'id_divisi' => $this->request->getVar('id_divisi'),
            'id_prioritas' => $this->request->getVar('id_prioritas'),
            'id_ekonomis' => $this->request->getVar('id_ekonomis'),
            'id_kondisi_aset' => $this->request->getVar('id_kondisi'),
            'nama_aset' => $this->request->getVar('nama_aset'),
            'merk' => $this->request->getVar('merk'),
            'type' => $this->request->getVar('type'),
            'serial_number' => $this->request->getVar('serial_number'),
            'masuk' => $this->request->getVar('masuk'),
            'habis' => date('Y-m-d', strtotime($this->request->getVar('masuk').$abis[0]['tahun'])),
            'harga' => $this->request->getVar('harga'),
            'keterangan' => $this->request->getVar('keterangan'),
            'status' => '1',
        ]);

        session()->setFlashdata('ditambah', 'Aset Berhasil di Tambah.');
        return redirect()->to(base_url('/aset'));
        
    }

    public function editAset($id_aset = 0)

    {

        $this->masaguna->select('tahun');
        $this->masaguna->where('id_ekonomis', $this->request->getVar('id_ekonomis'));
        $masaguna = $this->masaguna->get();
        $abis = $masaguna->getResultArray();
        // dd($this->request->getVar());
        $this->aset->update($id_aset, [
            'id_divisi' => $this->request->getVar('id_divisi'),
            'id_prioritas' => $this->request->getVar('id_prioritas'),
            'id_ekonomis' => $this->request->getVar('id_ekonomis'),
            'id_kondisi_aset' => $this->request->getVar('id_kondisi'),
            'nama_aset' => $this->request->getVar('nama_aset'),
            'merk' => $this->request->getVar('merk'),
            'type' => $this->request->getVar('type'),
            'serial_number' => $this->request->getVar('serial_number'),
            'masuk' => $this->request->getVar('masuk'),
            'habis' => date('Y-m-d', strtotime($this->request->getVar('masuk').$abis[0]['tahun'])),
            'harga' => $this->request->getVar('harga'),
            'keterangan' => $this->request->getVar('keterangan'),
            'status' => $this->request->getVar('status'),
        ]);
        // dd($data);
        // $this->aset->where('id_aset', $id_aset)->update($data);
        session()->setFlashdata('diupdate', 'Aset Berhasil di Ubah.');
        return redirect()->to(base_url('/aset'));

    }
    
    public function deleteAset($id_aset = 0)
    {
        $this->aset->where('id_aset', $id_aset);
        $this->aset->update($id_aset, [
            'status' => '0'
        ]);
        session()->setFlashdata('dihapus', 'Aset Berhasil di Hapus.');
        return redirect()->to('/aset');
    }

    public function kondisiAset()
    {
        $this->data['format_template'] = [

            "title" => "Kondisi Aset | Sistem Informasi Manajemen Aset",
            "head_title" => "Kondisi Aset",

        ];

        $this->data['aset'] = $this->aset
        ->where('status', 1)
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->findAll();

        $this->data['divisi'] = $this->divisi
        ->findAll();
        $this->data['masaguna'] = $this->masaguna->get()->getResult();
        $this->data['kondisi'] = $this->kondisi->get()->getResult();
        $this->data['prioritas'] = $this->prioritas->get()->getResult();
  

        return view('aset/kondisi-aset', $this->data);

    }
    public function rekomendasiAset()
    {
        $this->data['format_template'] = [

            "title" => "Rekomendasi Aset | Sistem Informasi Manajemen Aset",
            "head_title" => "Rekomendasi Aset",

        ];

        $this->data['aset'] = $this->aset
    
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->where('aset.id_kondisi_aset', 4)
        ->orwhere('aset.id_kondisi_aset', 3)
        ->where('status', 1)
        ->findAll();

        $this->data['divisi'] = $this->divisi
        ->findAll();
        $this->data['masaguna'] = $this->masaguna->get()->getResult();
        $this->data['kondisi'] = $this->kondisi->get()->getResult();
        $this->data['prioritas'] = $this->prioritas->get()->getResult();
  

        return view('aset/rekomendasi-aset', $this->data);

    }

    public function formPengadaan()
    {

        $this->data['format_template'] = [

            "title" => "Pengadaan Aset | Sistem Informasi Manajemen Aset",
            "head_title" => "Pengadaaan Aset",

        ];

        $this->data['pengadaan'] = $this->pengadaan
        ->where('active', 1)
        ->join('tb_divisi', 'tb_divisi.id_divisi = form_pengadaan.id_divisi')
        ->join('persetujuan', 'persetujuan.id_persetujuan = form_pengadaan.id_persetujuan')
        ->findAll();
        
        $this->data['divisi'] = $this->divisi
        ->findAll();
        $this->data['persetujuan'] = $this->persetujuan->get()->getResult();

        return view('aset/pengadaan', $this->data);

    }
    public function actionTambahPengadaan()
    {
        
        $this->pengadaan->insert([
            'nama_aset' => $this->request->getVar('nama_aset'),
            'id_divisi' => $this->request->getVar('id_divisi'),
            'harga_aset' => $this->request->getVar('harga_aset'),
            'tanggal_pengadaan' => $this->request->getVar('tanggal_pengadaan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'id_persetujuan' => '1',
            'active' => '1',
        ]);

        session()->setFlashdata('ditambah', 'Pengajuan Pengadaan Berhasil di Tambah.');
        return redirect()->to(base_url('/pengadaan'));

    }
    public function actionUbahPengadaan($id_pengadaan = 0)
    {

        $this->pengadaan->update($id_pengadaan, [
            'nama_aset' => $this->request->getVar('nama_aset'),
            'id_divisi' => $this->request->getVar('id_divisi'),
            'harga_aset' => $this->request->getVar('harga_aset'),
            'tanggal_pengadaan' => $this->request->getVar('tanggal_pengadaan'),
            'keterangan' => $this->request->getVar('keterangan'),

        ]);

        session()->setFlashdata('diupdate', 'Pengajuan Pengadaan Berhasil di Ubah.');
        return redirect()->to(base_url('/pengadaan'));

    }
        public function actionDeletePengadaan($id_pengadaan = 0)
    {
        $this->pengadaan->update($id_pengadaan, [
            'active' => '0',
        ]);
        session()->setFlashdata('dihapus', 'Pengajuan Pengadaan Berhasil di Hapus.');
        return redirect()->to('/pengadaan');
    }

    public function actionUbahStatusPengadaan($id_pengadaan = 0)
    {

        $this->pengadaan->update($id_pengadaan, [
            'id_persetujuan' => $this->request->getVar('id_persetujuan'),
        ]);

        session()->setFlashdata('diupdate', 'Persetujuan Pengadaan Berhasil di Ubah.');
        return redirect()->to('/pengadaan');
    }


    public function formPerbaikanPergantian()
    {

        $this->data['format_template'] = [

            "title" => "Perbaikan dan Pergantian Aset | Sistem Informasi Manajemen Aset",
            "head_title" => "Perbaikan dan Pergantian Aset",

        ];

        $this->data['perbaikanPergantian'] = $this->perbaikanPergantian
        ->where('active',1)
        ->join('persetujuan', 'persetujuan.id_persetujuan = form_perbaikan_pergantian.id_persetujuan')
        ->join('aset', 'aset.id_aset = form_perbaikan_pergantian.id_aset')
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->findAll();

        $this->data['aset'] = $this->aset
    
        ->join('tb_divisi', 'tb_divisi.id_divisi = aset.id_divisi')
        ->join('tahun_ekonomis', 'tahun_ekonomis.id_ekonomis = aset.id_ekonomis')
        ->join('prioritas', 'prioritas.id_prioritas = aset.id_prioritas')
        ->join('kondisi_aset', 'kondisi_aset.id_kondisi_aset = aset.id_kondisi_aset')
        ->where('aset.id_kondisi_aset', 4)
        ->orwhere('aset.id_kondisi_aset', 3)
        ->where('status', 1)
        ->findAll();

        return view('aset/perbaikan-pergantian', $this->data);

    }
    public function actionTambahPerbaikanPergantian()
    {

        $this->perbaikanPergantian->insert([
            'id_aset' => $this->request->getVar('id_aset'),
            'id_persetujuan' => '1',
            'jenis_pengajuan' => $this->request->getVar('jenis_pengajuan'),
            'tanggal_pengajuan' => $this->request->getVar('tanggal_pengajuan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'active' => '1',
        ]);

        session()->setFlashdata('ditambah', 'Pengajuan Perbaikan Pergantian Berhasil di Tambah.');
        return redirect()->to(base_url('/perbaikan-pergantian'));

    }

    public function actionUbahStatusPerbaikanPergantian($id_perbaikan_pergantian = 0)
    {

        $this->perbaikanPergantian->update($id_perbaikan_pergantian, [

            'id_persetujuan' => $this->request->getVar('id_persetujuan'),
        ]);

        session()->setFlashdata('diupdate', 'Persetujuan Perbaikan Pergantian Berhasil di Ubah.');
        return redirect()->to('/perbaikan-pergantian');
    }
    public function actionDeletePerbaikanPergantian($id_perbaikan_pergantian = 0)
    {
        $this->perbaikanPergantian->update($id_perbaikan_pergantian, [
            'active' => '0',
        ]);
        session()->setFlashdata('dihapus', 'Pengajuan Perbaikan Pergantian Berhasil di Hapus.');
        return redirect()->to('/perbaikan-pergantian');
    }

    public function actionUbahPerbaikanPergantian($id_perbaikan_pergantian = 0)
    {

        $this->perbaikanPergantian->update($id_perbaikan_pergantian, [
            'id_aset' => $this->request->getVar('id_aset'),
            'jenis_pengajuan' => $this->request->getVar('jenis_pengajuan'),
            'tanggal_pengajuan' => $this->request->getVar('tanggal_pengajuan'),
            'keterangan' => $this->request->getVar('keterangan'),

        ]);

        session()->setFlashdata('diupdate', 'Pengajuan Perbaikan dan Pergantian Berhasil di Ubah.');
        return redirect()->to(base_url('/perbaikan-pergantian'));

    }
}