<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisKemasan extends Model
{

    protected $table = 'jenis_kemasan'; // Name of the database table

    protected $primaryKey = 'id'; // Primary key column name

    protected $allowedFields = [
        'jenis_kemasan', 
        'keterangan_kemasan']; // List of fields that can be accessed/modified

    // Optional properties for timestamps (created_at, updated_at)
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
