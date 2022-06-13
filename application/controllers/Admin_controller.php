<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_applications_count'] = $this->Admin_Model->get_applications_count();
		$data['verified_applications_count'] = $this->Admin_Model->get_verified_applications_count();
		$data['unverified_applications_count'] = $this->Admin_Model->get_unverified_applications_count();
		$data['rejected_applications_count'] = $this->Admin_Model->get_rejected_applications_count();
		$data['department_count'] = $this->Admin_Model->get_department_count();
		$data['public_complaint_count'] = $this->Admin_Model->get_public_complaint_count();
		$data['student_complaint_count'] = $this->Admin_Model->get_student_complaint_count();
		$data['enquiry_count'] = $this->Admin_Model->get_enquiry_count();
		$data['complaint_category_count'] = $this->Admin_Model->get_complaint_category_count();
		$data['enquiry_category_count'] = $this->Admin_Model->get_enquiry_category_count();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/partials/footer_close');
	}
}
