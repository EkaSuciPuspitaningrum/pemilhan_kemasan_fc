<?php namespace App\Models;
use CodeIgniter\Model;

class Admin extends Model
{

      protected $table = 'admin';
      protected $allowedFields = ['name','email','password','created_at', 'updated_at'];


	public function get_data($email, $password)
	{
      return $this->db->table('admin')
      ->where(array('email' => $email, 'password' => $password))
      ->get()->getRowArray();
	}

}