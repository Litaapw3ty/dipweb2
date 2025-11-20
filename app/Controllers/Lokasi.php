<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Lokasi extends Controller
{
    public function index($area = 'Cilacap')
    {
        $produkModel = new ProdukModel();

        $data['produk'] = $produkModel->where('lokasii', $area)->findAll();
        $data['area']   = $area;

        echo view('layouts/header');
        echo view('lokasi/index', $data);
        echo view('layouts/footer');
    }
}
