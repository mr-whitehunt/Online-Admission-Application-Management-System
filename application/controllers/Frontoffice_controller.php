<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontoffice_controller extends CI_Controller {

	public function enquiry()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_enquiry'] = $this->get_enquiry_details();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/enquiry',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/enquiry');
		$this->load->view('admin/partials/footer_close');
	}

	public function complaint()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_complaint'] = $this->get_complaint_details();
		$data['get_public_complaint'] = $this->Frontoffice_Model->get_public_complaint_details();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/complaint',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/complaint');
		$this->load->view('admin/partials/footer_close');
	}

	public function setup_front_office()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_enquiry_cat'] = $this->Frontoffice_Model->get_enquiry_cat();
		$data['get_complaint_cat'] = $this->Frontoffice_Model->get_complaint_cat();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/setup_front_office',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/setup_front_office');
		$this->load->view('admin/partials/footer_close');
	}

	public function edit_enquiry_type($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_enquiry_cat'] = $this->Frontoffice_Model->get_enquiry_cat_by_id($id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/edit_enquiry_type',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/update_enquiry_type');
		$this->load->view('admin/partials/footer_close');
	}

	public function edit_complaint_type($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_complaint_cat'] = $this->Frontoffice_Model->get_complaint_cat_by_id($id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/edit_complaint_type',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/update_complaint_type');
		$this->load->view('admin/partials/footer_close');
	}

	public function update_enquiry_type()
	{
		$this->form_validation->set_rules('enquiry_type','enquiry_type','required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			$enquiry_cat_id = $this->input->post('enquiry_cat_id');
			$enquiry_type = $this->input->post('enquiry_type');
			$check_enquiry_type = $this->Frontoffice_Model->check_enquiry_type_by_type($enquiry_type);
			if($check_enquiry_type == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$data = array(
					'enquiry_type'=>$enquiry_type
				);
				$update = $this->Frontoffice_Model->update_enquiry_type($enquiry_cat_id,$data);
				if($update)
				echo 'updated';
				else
				echo 'not_updated';
			}
		}
	}

	public function update_complaint_type()
	{
		$this->form_validation->set_rules('complaint_type','complaint_type','required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			$complaint_cat_id = $this->input->post('complaint_cat_id');
			$complaint_type = $this->input->post('complaint_type');
			$check_complaint_type = $this->Frontoffice_Model->check_complaint_type_by_type($complaint_type);
			if($check_complaint_type == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$data = array(
					'complaint_type'=>$complaint_type
				);
				$update = $this->Frontoffice_Model->update_complaint_type($complaint_cat_id,$data);
				if($update)
				echo 'updated';
				else
				echo 'not_updated';
			}
		}
	}

	public function get_enquiry_details()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$get_enquiry = $this->Frontoffice_Model->get_enquiry_details();
		if($get_enquiry)
		{
			return $get_enquiry;
		}
	}

	public function get_complaint_details()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$get_complaint = $this->Frontoffice_Model->get_complaint_details();
		if($get_complaint)
		{
			return $get_complaint;
		}
	}

	public function add_enquiry_type()
	{
		$this->form_validation->set_rules('enquiry_type','enquiry_type','required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			$enquiry_type = $this->input->post('enquiry_type');
			$check_enquiry_type = $this->Frontoffice_Model->check_enquiry_type($enquiry_type);
			if($check_enquiry_type == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$data = array(
					'enquiry_type'=>$enquiry_type
				);
				$insert = $this->Frontoffice_Model->insert_enquiry_type($data);
				if($insert)
				echo 'inserted';
				else
				echo 'not_inserted';
			}
		}
	}

	public function add_complaint_type()
	{
		$this->form_validation->set_rules('complaint_type','complaint_type','required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			$complaint_type = $this->input->post('complaint_type');
			$check_complaint_type = $this->Frontoffice_Model->check_complaint_type($complaint_type);
			if($check_complaint_type == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$data = array(
					'complaint_type'=>$complaint_type
				);
				$insert = $this->Frontoffice_Model->insert_complaint_type($data);
				if($insert)
				echo 'inserted';
				else
				echo 'not_inserted';
			}
		}
	}

	public function delete_complaint_type($id)
	{
		$delete = $this->Frontoffice_Model->delete_complaint_type($id);
		if($delete)
		redirect($this->agent->referrer());
	}

	public function delete_enquiry_type($id)
	{
		$delete = $this->Frontoffice_Model->delete_enquiry_type($id);
		if($delete)
		redirect($this->agent->referrer());
	}
}
