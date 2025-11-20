<?php

namespace App\Models;

use CodeIgniter\Model;

class KoleksiModel extends Model
{
    protected $table = 'favorit';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'produk_id',
        'created_at'
    ];

    public function tambahFavorit($userId, $produkId)
    {
        // Cek apakah sudah ada
        $cek = $this->where('user_id', $userId)
                    ->where('produk_id', $produkId)
                    ->first();

        if ($cek) {
            return false; // Sudah ada di favorit
        }

        return $this->insert([
            'user_id'   => $userId,
            'produk_id' => $produkId,
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }

    public function getFavoritByUser($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }

    public function hapusFavorit($userId, $produkId)
    {
        return $this->where('user_id', $userId)
                    ->where('produk_id', $produkId)
                    ->delete();
    }
}
