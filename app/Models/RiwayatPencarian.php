<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatPencarian extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'riwayat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = 
    [
        'namaproduk',
        'beratproduk',
        'ukuranproduk',
        'volumeproduk',
        'jenis_kemasan',
        'persentase_perhitungan',
        'created_date',
        'updated_date'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_date';
    protected $updatedField  = 'updated_date';
    protected $deletedField  = 'deleted_date';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
