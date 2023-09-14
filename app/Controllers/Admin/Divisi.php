<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\M_divisi;
class Divisi extends BaseController
{


    public function __construct()
    {
        $this->divisi = new M_divisi();
    }

    public function index()
    {

        $this->data['format_template'] = [

            "title" => "Divisi | Sistem Informasi Manajemen Aset",
            "head_title" => "Daftar Divisi",

        ];

        $this->data['divisi'] = $this->divisi
        ->findAll();
        return view('admin/divisi', $this->data);
    }

    public function tambahDivisi()
    {
        $this->divisi->insert([
            'nama_divisi' => $this->request->getVar('nama_divisi')
        ]);
        session()->setFlashdata('ditambah', 'Divisi Berhasil di Tambah.');
        return redirect()->to(base_url('/divisi'));
    }

    public function editDivisi($id_divisi = 0)

    {
        $this->divisi->update($id_divisi, [
            'nama_divisi' => $this->request->getVar('nama_divisi')
        ]);
        session()->setFlashdata('diupdate', 'Divisi Berhasil di Ubah.');
        return redirect()->to(site_url('/divisi'));

    }
    
    public function deleteDivisi($id_divisi = 0)
    {
        $this->divisi->where('id_divisi', $id_divisi);
        $this->divisi->delete();
        session()->setFlashdata('dihapus', 'Divisi Berhasil di Hapus.');
        return redirect()->to('/divisi');
    }
}