<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'nidn';
    
    protected $allowedFields = ['nama', 'alamat', 'matkul'];
    public function insertData($data)
    {
        $this->db->table('dosen')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('dosen')->where('nidn', $data['nidn'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('dosen')->where('nidn', $data['nidn'])->delete($data);
    }
}
