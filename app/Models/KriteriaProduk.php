<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaProduk extends Model
{

    protected $table = 'kriteria_produk';
    protected $allowedFields = [
        //   'id_kriteria',
          'kriteria_produk',
          'created_date', 'updated_date'];

    protected $primaryKey = 'id';
    protected $returnType     = 'object';
         
    // protected $DBGroup          = 'default';
    // protected $table            = 'kriteriaproduks';
    // protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    // protected $allowedFields    = [];

    // // Dates
    // protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}