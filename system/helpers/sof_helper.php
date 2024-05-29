<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* End of file connect_helper.php */
/* Location: ./system/helpers/sof_helper.php */


//---------------------------------------- start common functions ---------------------//
//
if ( ! function_exists('admin_url'))
{
	function admin_url()
	{
		$CI = get_instance();
		return $CI->config->item('admin_url');
	}
}

if ( ! function_exists('admin_controller'))
{
	function admin_controller()
	{
		$CI = get_instance();
		return $CI->config->item('admin_controller');
	}

}


if ( ! function_exists('employee_url'))
{
	function employee_url()
	{
		$CI = get_instance();
		return $CI->config->item('employee_url');
	}
}


if ( ! function_exists('employee_controller'))
{
	function employee_controller()
	{
		$CI = get_instance();
		return $CI->config->item('employee_controller');
	}

}


if ( ! function_exists('show_admin404'))
{
	function show_admin404()
	{
		$CI = get_instance();
		return $CI->load->view('common/admin_error_page');
	}
}

if ( ! function_exists('get_session'))
{
	function get_session($session_name)
	{
		$CI = get_instance();
		return $CI->session->userdata($session_name);
	}

}
if ( ! function_exists('set_session'))
{
	function set_session($session_name, $value)
	{
		$CI = get_instance();
		return $CI->session->set_userdata($session_name, $value);
	}

}
if ( ! function_exists('unset_session'))
{
	function unset_session($session_name)
	{
		$CI = get_instance();
		return $CI->session->unset_userdata($session_name);
	}
}
if ( ! function_exists('admin_email'))
{
	function admin_email()
	{
		$CI = get_instance();
		return $CI->config->item('admin_email');
	}
}
if ( ! function_exists('no_reply_email'))
{
	function no_reply_email()
	{
		$CI = get_instance();
		return $CI->config->item('no_reply_email');
	}
}
if ( ! function_exists('login_email'))
{
	function login_email()
	{
		$CI = get_instance();
		return $CI->config->item('login_email');
	}
}

if ( ! function_exists('custom_substr'))
{
	function custom_substr($x, $length) {
		if (strlen($x) <= $length) {
			echo $x;
		} else {
			$y = substr($x, 0, $length) . '...';
			echo $y;
		}
	}
}

if ( ! function_exists('support_email'))
{
	function support_email()
	{
		$CI = get_instance();
		return $CI->config->item('support_email');
	}
}

if ( ! function_exists('show'))
{
	function show($data){
		echo "<pre>";
		print_r($data);
	}
}


//---------------------------------------- end common functions ---------------------//

if ( ! function_exists('total_donations'))
{
	function total_donations($purpose) {

		$CI = & get_instance();
		$CI->db->select('SUM(amount) as total_donation');
		$CI->db->from('donations');
		if($purpose != 'Health') { 
			$CI->db->where('purpose',$purpose);
		} else {
			$CI->db->where_in('purpose',array('Health' , 'Medical'));
		}
		$query = $CI->db->get()->row_array();
		if(empty($query['total_donation'])) {
			$query['total_donation'] = 0;
		}
		return $query['total_donation'];
	}
}