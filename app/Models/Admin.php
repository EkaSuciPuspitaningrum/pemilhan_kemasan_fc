<?php namespace App\Models;
use CodeIgniter\Model;

class Admin extends Model
{

      protected $table = 'admin';
      protected $allowedFields = [
            'name',
            'email',
            'password',
            'created_date', 'updated_date'];


}