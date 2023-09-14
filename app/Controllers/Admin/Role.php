<?php

namespace App\Controllers\Admin;
use \Myth\Auth\Authorization\PermissionModel;
use \Myth\Auth\Authorization\GroupModel;
use App\Models\M_auth_groups;
use App\Models\M_auth_groups_permissions;
use App\Controllers\BaseController;

class Role extends BaseController
{
    protected $db, $builder, $GroupModel;

    public function __construct()
    {

        // $this->db      = \Config\Database::connect();
        // $this->builder = $this->db->table('auth_groups');
        // $this->builder2 = $this->db->table('auth_permissions');
        // $this->builder3 = $this->db->table('auth_groups_permissions');
        $this->auth_groups = new M_auth_groups();
        $this->groups = new GroupModel();
        $this->permissions = new PermissionModel();
        $this->groupsPermissions = new M_auth_groups_permissions();
        // $this->permissions = new Permissions();
    }

    public function index()
    {

        $this->data['format_template'] = [

            "title" => "Role | Sistem Informasi Manajemen Aset",
            "head_title" => "Daftar Role",

        ];

        $this->data['groups'] = $this->groups
        ->findAll();

        $query = $this->permissions->get();
        $this->data['permissions'] = $query->getResult();

        return view('admin/role2', $this->data);
    }
    

    public function tambahRole()
    {
        $this->groups->insert([

            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description')

        ]);

        $permissions = $this->request->getPost('pr');
        if (count($permissions) > 0) {
            foreach ($permissions as $val) {
                $this->groups->addPermissiontoGroup($val, $this->groups->getInsertId());
            }
        }

        session()->setFlashdata('ditambah', 'Role Berhasil di Tambah.');
        return redirect()->to(base_url('/role'));
    }

    public function editrole($id = 0)
    {
        $this->data['format_template'] = [

            "title" => "Edit Role | Sistem Informasi Manajemen Aset",
            "head_title" => "Edit Role",
        ];

        $this->data['auth_groups'] = $this->groups->find($id);
        $this->data['permissions'] = $this->permissions->findAll();
        // $query = $this->permissions2->getRow($id);
        // $this->builder->select('id, name, description');
        // $this->builder->where('id', $id);
        // $query = $this->builder->get();
        // $query2 = $this->builder2->get();
        // $query3 = $this->builder3->get();

        // $this->data['auth_groups'] = $query->getRow();
        // $this->data['auth_permissions'] = $query2->getResult();
        // $this->data['auth_groups_permissions'] = $query3->getResult();

        if (empty($this->data['auth_groups'])) {
            return redirect()->to('/role');
        }

        $GroupModel = new GroupModel();

        foreach ($this->data['group'] = $GroupModel->getPermissionsForGroup($id) as $gt) {

            $permissionGroup[$gt['id']] = $gt['name'];
        }


        return view('admin/editrole', $this->data);
    }

    public function actionEditRole($id = 0)
    {
        $this->groups->update($id, [

            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description')

        ]);

        $this->groupsPermissions->where('group_id', $id)->delete();

        $permissions = $this->request->getPost('pr');
        if (count($permissions) > 0) {
            foreach ($permissions as $val) {
                $this->groups->addPermissiontoGroup($val, $id);
            }
        }

        session()->setFlashdata('diupdate', 'Role Berhasil di Ubah.');
        return redirect()->to(site_url('/role'));

    }

    public function deleterole($id = 0)
    {
        // $this->auth_groups->delete($id);
        $this->groups->where('id', $id);
        $this->groups->delete();
        session()->setFlashdata('dihapus', 'Role Berhasil di Hapus.');
        return redirect()->to('/role');
    }
}
