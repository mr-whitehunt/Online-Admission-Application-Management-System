<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email'))
		redirect(base_url('admin/dashboard'));
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('login',$data);
	}

	public function signin()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			echo 'Something went wrong!';
		}
		else
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$check = $this->Auth_Model->check_user($email);
			if($check == 1)
			{
				$get_user = $this->Auth_Model->get_user($email);
				if($get_user)
				{
					if (password_verify($password, $get_user->user_pass)) {
						$user_data=array(
							'id'=>$get_user->user_id,
							'email'=>$get_user->user_email,
						);
						$this->session->set_userdata($user_data);
						echo 'success';
					} else {
						echo 'invalid_password';
					}
				}
			}
			else
			{
				echo 'not_exist';
			}
		}
	}

	public function logout()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
