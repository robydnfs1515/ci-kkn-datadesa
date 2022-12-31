<?php

namespace App\Controllers;

use App\Models\M_upah;
use CodeIgniter\Controller;

class Upah extends Controller
{
    public function index()
    {
        $model = new M_Upah();

        $data = [
            'judul' => 'Data BLT Subsidi Upah',
            'upah' => $model->getAllData(),
        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('upah/index', $data);
        echo view('templates/v_footer');
    }
}