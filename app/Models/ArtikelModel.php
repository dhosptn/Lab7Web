<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'judul',
        'isi',
        'status',
        'slug',
        'gambar',
        'created_at'
    ];

    // Aktifkan fitur timestamps
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    
}