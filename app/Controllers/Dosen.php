<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use App\Models\CustomerModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dosen extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }
    public function index()
    {
        $data = [
            'active' => 'dosen',
            'judul' => 'Master Data',
            'subtitle' => 'dosen',
            'dosen' => $this->dosenModel->findAll(),
        ];
        return view('dosen', $data);
    }

    public function insertData()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'matkul' => $this->request->getPost('matkul')
        ];

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
        $this->dosenModel->insertData($data);
        return redirect()->to('dosen');
    }

    public function updateData($id_dosen)
    {
        $data = [
            'nidn' => $id_dosen,
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'matkul' => $this->request->getPost('matkul')
        ];
        
        $this->dosenModel->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('dosen');
    }

    public function deleteData($id_dosen)
    {
        $data = [
            'id_dosen' => $id_dosen
        ];
        
        $this->dosenModel->deleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('dosen');
    }

    
}
