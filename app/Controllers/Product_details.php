<?php namespace App\Controllers;

class Product_details extends BaseController
{
	public function index()
	{
            $id = $_GET['id'];
            $db = \Config\Database::connect();
        
            $query = $db->query('SELECT * FROM product_list where id='.$id);
            $results = $query->getResult();
            foreach($results as $row)
            {
                  $data['product_list'] = $row;
            }
            
            return view('Product_details',$data);
	}

	//--------------------------------------------------------------------

}
