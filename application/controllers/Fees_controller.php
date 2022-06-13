<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees_controller extends CI_Controller {

	public function fees_details()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/fees_details');
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/fees_details');
		$this->load->view('admin/partials/footer_close');
	}

    public function collect_fees()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/collect_fees');
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/fees_details');
		$this->load->view('admin/partials/footer_close');
	}
}
