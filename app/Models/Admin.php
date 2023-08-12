<?php namespace App\Models;
use CodeIgniter\Model;

class Admin extends Model
{

      protected $table = 'admin';
      protected $returnType     = 'object';
      protected $allowedFields = [
            'name',
            'email',
            'password',
            'password_hash',
            'created_date', 'updated_date'];


}