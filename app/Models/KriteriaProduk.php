<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaProduk extends Model
{

    protected $table = 'kriteria_produk';
    protected $allowedFields = [
          'kriteria_produk',
          'created_date', 'updated_date'];

    protected $primaryKey = 'id';
    protected $returnType     = 'object';
         
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}
