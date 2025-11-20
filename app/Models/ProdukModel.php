<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';   // ganti dengan nama tabelmu
    protected $primaryKey       = 'id';       // ganti kalau primary key beda

    protected $returnType       = 'array';

    // kolom yang boleh diinput/diedit (sesuaikan dengan database kamu)
    protected $allowedFields    = [
        'nama',
        'lokasii',
        'gambar',
        'harga',
        'rating',
        'ulasan',
    ];
}
