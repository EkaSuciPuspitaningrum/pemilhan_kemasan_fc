<?php

namespace App\Models;

use CodeIgniter\Model;

class BasisPengetahuan extends Model
{
    protected $table = 'basis_pengetahuan';
    protected $allowedFields = [

          'jenis_kemasan_id',
          'kriteria_produk_id',
          'created_date', 
          'updated_date'];

          protected $primaryKey = 'id';
          protected $returnType     = 'object';

    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

   public function kriteriaProduk()
    {
        return $this->belongsTo(KriteriaProduk::class, 'kriteria_produk_id');
    }

    public function jenisKemasan()
    {
        return $this->belongsTo(JenisKemasan::class, 'jenis_kemasan_id');
    }
}
