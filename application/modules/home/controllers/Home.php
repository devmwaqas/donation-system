<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();	
		$this->load->model('home/home_model');
		$this->load->library('email');
	}
	public function index()
	{	
		$data['donations'] = $this->home_model->get_donations();
		$this->load->view('home' , $data);
	}
	
	public function about()
	{	
		$this->load->view('about');
	}

	public function projects()
	{	
		$this->load->view('projects');
	}

	public function contact()
	{	
		$this->load->view('contact');
	}

	public function donation()
	{	
		$this->load->view('donation');
	}

	public function how_donate()
	{	
		$this->load->view('how_donate');
	}

	public function use_donation()
	{	
		$this->load->view('use_donation');
	}

	public function economic_development()
	{	
		$this->load->view('economic_development');
	}
	public function clothing_line()
	{	
		$this->load->view('clothing_line');
	}
	public function clean_water()
	{	
		$this->load->view('clean_water');
	}

	public function hunger()
	{	
		$this->load->view('hunger');
	}

	public function education()
	{	
		$this->load->view('education');
	}

	public function health_medical()
	{	
		$this->load->view('health_medical');
	}

	public function donation_form()
	{	
		$this->load->view('donation_form');
	}

	public function privacy()
	{	
		$this->load->view('privacy');
	}
	
	public function gift_voucher()
	{	
		$this->load->view('gift_voucher');
	}

	public function submit_donation()
	{

		if($_POST) {
			$data['f_name'] = $_POST['f_name'];
			$data['l_name'] = $_POST['l_name'];
			$data['email'] = $_POST['email'];
			$data['purpose'] = $_POST['purpose'];
			$data['identity'] = $_POST['identity'];
			$data['city'] = $_POST['city'];
			$data['state'] = $_POST['state'];

			$this->session->set_flashdata('f_name',$_POST['f_name']);
			$this->session->set_flashdata('l_name',$_POST['l_name']);
			$this->session->set_flashdata('email',$_POST['email']);
			$this->session->set_flashdata('purpose',$_POST['purpose']);
			$this->session->set_flashdata('identity',$_POST['identity']);
			$this->session->set_flashdata('city',$_POST['city']);
			$this->session->set_flashdata('state',$_POST['state']);

			if(empty($_POST['don'])) {
				$_POST['don'] = 0;
			}

			if($_POST['donation'] == 'one_time') {
				if(empty($_POST['one_time_other_amount']) && empty($_POST['don'])) {
					$this->session->set_flashdata('value_error','Please select or enter donation amount.');

					redirect($_POST['location'],'refresh');
				}  else {
					if($_POST['one_time_other_amount'] > $_POST['don']) {
						$data['donation_amount'] = $_POST['one_time_other_amount'];
					} elseif($_POST['don'] > $_POST['one_time_other_amount']) {
						$data['donation_amount'] = $_POST['don'];
					} else {
						$data['donation_amount'] = $_POST['don'];
					}
				}

				$this->load->view('submit_donation', $data);

			} elseif($_POST['donation'] == 'monthly') {

				if(empty($_POST['monthly_other_amount']) && empty($_POST['don'])) {
					$this->session->set_flashdata('value_error','Please select or enter donation amount.');
					redirect($_POST['location'],'refresh');
				}  else {
					if($_POST['one_time_other_amount'] > $_POST['don']) {
						$data['donation_amount'] = $_POST['one_time_other_amount'];
					} elseif($_POST['don'] > $_POST['one_time_other_amount']) {
						$data['donation_amount'] = $_POST['don'];
					} else {
						$data['donation_amount'] = $_POST['don'];
					}
				}

				$this->load->view('submit_donation', $data);

			} else {
				redirect($_POST['location'],'refresh');
			}
		} else {
			redirect($_POST['location'],'refresh');
		}

	}


	public function save_donation()
	{
		$data = $_POST;

		if(empty($data['tid'])) {
			echo json_encode(array('error' => 'something went wrong'));
			exit;
		}

		$status = $this->home_model->save_donation($data);

		if($status) {

			$this->send_email_to_admin($data);
			$this->send_email_to_user($data);

			echo json_encode(array('success' => 'successfully saved'));
			exit;
		} else {
			echo json_encode(array('error' => 'something went wrong'));
			exit;
		}

	}

	public function send_email_to_admin($data)
	{
		$amount = $data['amount'];
		$username = $data['first_name']." ".$data['last_name'];
		$trx_id = $data['tid'];
		$purpose = $data['purpose'];

		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from('donation@codewithwaqas.com', 'MAGA Donation');
		$this->email->to('info@codewithwaqas.com');
		$this->email->subject('Donation Received');
		$this->email->message('<p><b>Dear Admin,</b></p><p>You have received a donation amount of <b>$'.$amount.'</b> from <b>'.$username.'</b> for <b>'.$purpose.'</b> against transaction id: <b>'.$trx_id.'</b>.<br>Thanks');
		$this->email->send();
		return true;
	}

	public function send_email_to_user($data)
	{
		$amount = $data['amount'];
		$username = $data['first_name']." ".$data['last_name'];
		$trx_id = $data['tid'];
		$purpose = $data['purpose'];
		$user_email = $data['user_email'];

		$config1['mailtype'] = 'html';
		$this->email->initialize($config1);
		$this->email->from('info@codewithwaqas.com', 'MAGA Donation');
		$this->email->to($user_email);
		$this->email->subject('Donation Received');
		$this->email->message('<p><b>Dear <b>'.$username.'</b>,</b></p><p>Your donation amount of <b>$'.$amount.'</b> has been received for <b>'.$purpose.'</b> against transaction id: <b>'.$trx_id.'</b>.<br>Thanks');
		$this->email->send();
		return true;
	}

	public function send_contact_email()
	{
		$data = $_POST;

		if( empty($data["name"]) || empty($data["phone"]) || empty($data["email"]) || empty($data["message"])) {
			echo json_encode(array('msg' => 'error'));
			exit;
		} else {

			$username = $data["name"];
			$phone = $data["phone"];
			$email = $data["email"];
			$message = $data["message"];

			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from('contact@codewithwaqas.com', 'MAGA Contact Email');
			$this->email->to('info@codewithwaqas.com');
			$this->email->subject('New Contact Email');
			$this->email->message('<p><b>Dear Admin,</b></p><p>You have a message from <b>'.$username.'</b><br> Name: '.$username.'<br>Phone: '.$phone.'<br>Email: '.$email.'<br>Message: '.$message.'<br>Thanks</p>');
			if($this->email->send()) {
				echo json_encode(array('msg' => 'success'));
				exit;
			} else {
				echo json_encode(array('msg' => 'send_error'));
				exit;
			}
		}
	}

}