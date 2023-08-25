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

    public function insertData($jenisKemasanId, $kriteriaProdukId)
    {
        $data = [
            'jenis_kemasan_id' => $jenisKemasanId,
            'kriteria_produk_id' => $kriteriaProdukId,
        ];

        $this->insert($data);
    }

    public function getMatchedRules($selectedCriteria) {
        return $this->whereIn('kriteria_produk_id', $selectedCriteria)
                    ->findAll();
    }

    public function getJenisKemasanName($jenisKemasanId) {
        $jenisKemasan = $this->db->table('jenis_kemasan')
                                 ->where('id', $jenisKemasanId)
                                 ->get()
                                 ->getRow();
    
        if ($jenisKemasan) {
            return $jenisKemasan->jenis_kemasan; // Ganti dengan atribut yang sesuai
        }
    
        return null;
    }
    
}
