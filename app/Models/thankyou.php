<?php namespace App\Models;
use CodeIgniter\Model;


class thankyou extends Model
{
    public function insert_user() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'city' => $this->input->post('city')
        );
        // cart_details is the name of the db table you are inserting in
        return $this->db->insert('cart_details', $data);
    }
}