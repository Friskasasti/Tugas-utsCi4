<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff_kampus';

    protected $primaryKey = 'id_staff';
    
    protected $allowedFields = ['nama', 'posisi', 'alamat'];

    public function insertData($data)
    {
        $this->db->table('staff_kampus')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('staff_kampus')->where('id_staff', $data['id_staff'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('staff_kampus')->where('id_staff', $data['id_staff'])->delete($data);
    }
}
