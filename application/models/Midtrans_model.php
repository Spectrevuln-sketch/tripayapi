<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Midtrans_model extends CI_Model
{

    public function getCustomerData($customer_details)
    {

        $data = [
            'fullnama' => 'fullnama',
            'email' => 'email',
            'no_telepon'  =>  'no_telepon'
        ];

        $customer_details = $this->db->get_where('planggan', $data)->row_array();
        return $customer_details;
    }


    public function getTransactionDetail()
    {
        $detail_trans = $this->db->get('transaction_detail_order')->result_array();
    }






}