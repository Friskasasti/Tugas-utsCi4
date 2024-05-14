<?php

namespace App\Controllers;

use App\Models\StaffModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Staff extends BaseController
{
    protected $staffModel;
    public function __construct()
    {
        $this->staffModel = new StaffModel();
    }
    public function index()
    {
        $data = [
            'active' => 'staff',
            'judul' => 'Master Data',
            'subtitle' => 'Staff',
            'staff' => $this->staffModel->findAll()
        ];
        return view('staff', $data);
    }

    public function insertData()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'posisi' => $this->request->getPost('posisi'),
            'alamat' => $this->request->getPost('alamat')
        ];

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        $this->staffModel->insertData($data);
        return redirect()->to('staff');
    }

    public function updateData($id_staff)
    {
        $data = [
            'id_staff' => $id_staff,
            'nama' => $this->request->getPost('nama'),
            'posisi' => $this->request->getPost('posisi'),
            'alamat' => $this->request->getPost('alamat')
        ];
        
        $this->staffModel->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('staff');
    }

    public function deleteData($id_staff)
    {
        $data = [
            'id_staff' => $id_staff
        ];
        
        $this->staffModel->deleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('staff');
    }
}
