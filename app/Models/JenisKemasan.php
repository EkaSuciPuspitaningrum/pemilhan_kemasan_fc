<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisKemasan extends Model
{

    protected $table = 'jenis_kemasan'; // Name of the database table

    protected $primaryKey = 'id'; // Primary key column name
    protected $returnType     = 'object';
         
    protected $allowedFields = [
        'jenis_kemasan', 
        'keterangan_kemasan',
        'created_date', 
        'updated_date']; // List of fields that can be accessed/modified

    // Optional properties for timestamps (created_at, updated_at)
    protected $useTimestamps = true;
    protected $createdField  = 'created_date';
    protected $updatedField  = 'updated_date';

}
