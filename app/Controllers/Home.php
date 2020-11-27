<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
            $db = \Config\Database::connect();
        
             $query = $db->query('SELECT * FROM product_list');
             $results = $query->getResult();
             $data['product_list'] = $results;
             return view('home',$data);
	}
}
