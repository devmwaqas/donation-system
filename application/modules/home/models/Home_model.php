<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	   		//Do your magic here
	}

	public function get_donations()
	{
		$this->db->select('first_name,last_name,purpose,amount,city,state,identity_visible,created_at');
		$this->db->limit(200);
		$this->db->order_by('created_at', 'DESC');
		return $this->db->get('donations')->result_array();
	}

	public function save_donation($data)
	{
		$this->db->set('first_name' , $data['first_name']);
		$this->db->set('last_name' , $data['last_name']);
		$this->db->set('email' , $data['user_email']);

		$this->db->set('purpose' , $data['purpose']);
		$this->db->set('identity_visible' , $data['identity']);

		$this->db->set('city', $data['city']);
		$this->db->set('state', $data['state']);

		$this->db->set('trx_id' , $data['tid']);
		$this->db->set('payer_email' , $data['email']);
		$this->db->set('amount' , $data['amount']);
		$this->db->set('trx_status' , $data['status']);
		$this->db->set('currency_code' , $data['cc']);
		$this->db->set('created_at' ,date('Y-m-d H:i:s'));
		$query = $this->db->insert('donations');
		return $this->db->insert_id();
	}
}

/* End of file home_model.php */
   /* Location: ./application/modules/home/models/home_model.php */