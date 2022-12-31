<?php

namespace App\Models;

use CodeIgniter\Model;

// use App\Model;

class M_Upah extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('tb_upah')->get->getResultArray();
    }
}