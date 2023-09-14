<?php

namespace App\Controllers\Admin;

use App\Models\MUbahRoleUser;
use App\Models\User_model;
use App\Models\M_auth_groups_users;
use App\Models\M_auth_groups;
use App\Controllers\BaseController;

class User extends BaseController
{
    protected $db, $deleteuser, $builder2, $builder3 ,$users;

    public function __construct()
    {

        // $this->db      = \Config\Database::connect();
        // $this->deleteuser = $this->db->table('users');

        $this->users = new User_model();
        $this->builder2 = new M_auth_groups();
        $this->builder3 = new M_auth_groups_users();

        // $this->builder2 = $this->db->table('auth_groups');
        // $this->builder3 = $this->db->table('auth_groups_users');
    }

    public function index()
    {

        $this->data['format_template'] = [

            "title" => "User | Sistem Informasi Manajemen Aset",
            "head_title" => "User",

        ];
        // $this->users->select('users.id as userid, username, email, name, agu_id');
        // $this->builder2->select('id,name');
        // $this->builder3->select('agu_id, group_id, user_id');
        $this->data['auth_groups'] = $this->builder2
        ->findAll();
        $this->data['users'] = $this->users
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
        ->findAll();


   
 

        // $query = $this->users->get();
        // $query2 = $this->builder2->get();
        // $query3 = $this->builder3->get();

        
        // $query2 = $this->data['auth_groups'] = $query2->getResult();
        // $query3 = $this->data['auth_groups_users'] = $query3->getResult();
        return view('admin/user', $this->data);
    }
    public function formDetailUser($id = 0)
    {

        $this->data['format_template'] = [

            "title" => "Detail User | Sistem Informasi Manajemen Aset",
            "head_title" => "Detail User",

        ];
        $this->users->select('users.id as userid, username, email, fullname, name');
        $this->users->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $this->users->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->users->where('users.id', $id);
        $query = $this->users->get();

        $this->data['user'] = $query->getRow();

        if (empty($this->data['user'])) {
            return redirect()->to('/user');
        }

        return view('admin/detailuser', $this->data);
    }
    public function formEditUser($id = 0)

    {

        $this->data['format_template'] = [

            "title" => "Edit User | Sistem Informasi Manajemen Aset",
            "head_title" => "Edit User",

        ];

        $this->data['user'] = $this->users->find($id);

        if (empty($this->data['user'])) {
            return redirect()->to('/user');
        }

        return view('admin/edituser', $this->data);
    }

    public function editUser($id = 0)
    {
    
        $this->users->update($id, [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname')

        ]);

        session()->setFlashdata('diupdate','User Profile Berhasil di Ubah.');
        return redirect()->to('/user');
    }

    public function changePassword($id = 0) {
                
        $rules = [
      
            'password_baru' => [
                'label'  => 'Password Baru',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Passwordnya isi bangsat',

                ]
            ],        
          
        ];    
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {
            
            $users = model(UserModel::class);
            $user_id = $id;
            $entity = new \Myth\Auth\Entities\User;
            $newPassword = $this->request->getPost('password_baru');
            $entity->setPassword($newPassword);
            $hash  = $entity->password_hash;
            $users->update($user_id,['password_hash' => $hash]);
            
            return redirect()->to('/user')->with('diupdate', "Password User Berhasil di Ubah.");    
        }
        else {
        
            return redirect()->to('/user')->withInput()->with('dihapus', "Password User Gagal di Ubah.");                    
        }

    }

    public function deleteUser($id = 0)

    {
        $this->users->delete($id);

        session()->setFlashdata('dihapus', 'User Berhasil di Delete.');
        return redirect()->to('/user');
    }

    public function changeGroup($agu_id = 0)

    {

        $this->builder3->update($agu_id, [
            'user_id' => $this->request->getPost('user_id'),
            'group_id' => $this->request->getPost('group_id'),

        ]);

        session()->setFlashdata('ubahrole', 'User Role Berhasil di Ubah.');
        return redirect()->to('/user');
    }

        public function formChangePassword($id = 0)
    {

        $this->data['format_template'] = [

            "title" => "Ubah Password | Sistem Informasi Manajemen Aset",
            "head_title" => "Ubah Password",

        ];
        $this->users->select('users.id as userid, password_hash, username');
        $this->users->where('users.id', $id);
        $query = $this->users->get();

        $this->data['user'] = $query->getRow();

        if (empty($this->data['user'])) {
            return redirect()->to('/user');
        }

        return view('admin/changepass', $this->data);
    }
}
