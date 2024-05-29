<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	   		//Do your magic here
	}

	public function get_donations()
	{
		$this->db->select('*');
		$this->db->from('donations');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function change_admin_password($data)
	{
		$hash_pass="password('".$data['new_password']."')";
		$this->db->set('password',$hash_pass, FALSE);
		$this->db->where('email', get_session('admin_email'));
		$this->db->where('id', get_session('admin_id'));
		$result = $this->db->update('admin_users');
		return $this->db->affected_rows();
	}
	public function check_old_password($data)
	{
		$hash_pass="password('".$data['old_password']."')";
		$this->db->select('*');
		$this->db->where('password',$hash_pass,FALSE);
		$this->db->where('id', $this->session->userdata('admin_id'));
		$query = $this->db->get('admin_users');
		return $query->num_rows();

	}
	public function check_new_password($data)
	{
		$hash_pass="password('".$data['new_password']."')";
		$this->db->select('*');
		$this->db->where('password',$hash_pass,FALSE);
		$this->db->where('id', $this->session->userdata('admin_id'));
		$query = $this->db->get('admin_users');
		return $query->num_rows();
	}

}

/* End of file admin_model.php */
   /* Location: ./application/modules/admin/models/admin_model.php */