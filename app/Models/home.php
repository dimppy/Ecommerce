<?php namespace App\Models;
use CodeIgniter\Model;

class home extends Model
{
   protected $DBGroup = 'default';
   protected $table = 'product_list';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['name','price','description','product_img'];
}