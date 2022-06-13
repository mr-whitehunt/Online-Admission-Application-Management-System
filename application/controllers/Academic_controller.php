<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_controller extends CI_Controller {

	public function department()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_department'] = $this->get_departments();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/department',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/department');
		$this->load->view('admin/partials/footer_close');
	}

	public function edit_department($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_department'] = $this->Academic_Model->get_department_by_id($id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/edit_department',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/update_department');
		$this->load->view('admin/partials/footer_close');
	}

	public function semester()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_department'] = $this->get_departments();
		$data['get_semester'] = $this->get_semesters();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/semesters',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/semester');
		$this->load->view('admin/partials/footer_close');
	}

	public function edit_semester($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_department'] = $this->get_departments();
		$data['get_semester'] = $this->Academic_Model->get_semester_by_id($id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/edit_semester',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/update_semester');
		$this->load->view('admin/partials/footer_close');
	}

	public function add_department()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('department_name','department_name','required');
		if($this->form_validation->run() == FALSE)
		{
			echo 'Something Went Wrong!';
		}
		else
		{
			$department_name = $this->input->post('department_name');
			$department_duriation = $this->input->post('department_duriation');
			$check_department = $this->Academic_Model->check_department($department_name);
			if($check_department == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$config['upload_path']          = './uploads';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';

				$this->upload->initialize($config);

				if(!$this->upload->do_upload('department_image'))
				{
					echo $this->upload->display_errors();
				}
				else
				{
					$info = $this->upload->data();
					$image_path = base_url().'uploads/'.$info['file_name'];
					$data = array(
						'department_name'=>$department_name,
						'department_duriation'=>$department_duriation,
						'department_image'=>$image_path,
					);
					$insert = $this->Academic_Model->add_department($data);
					if($insert)
					echo 'inserted';
					else
					echo 'not inserted';
				}
			}
		}
	}

	public function get_departments()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$get_departmnet = $this->Academic_Model->get_departments();
		if($get_departmnet)
		return $get_departmnet;
	}

	public function update_department()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('department_name','department_name','required');
		if($this->form_validation->run() == FALSE)
		{
			echo 'Something went Wrong!.';
		}
		else
		{
			$department_id = $this->input->post('department_id');
			$department_name = $this->input->post('department_name');
			$department_duriation = $this->input->post('department_duriation');
			$check_department = $this->Academic_Model->check_department($department_name);
			if($check_department == 1)
			{
				if(!empty($_FILES['department_image']['name']))
				{
					$config['upload_path']          = './uploads';
					$config['allowed_types']        = 'gif|jpg|png|jpeg';

					$this->upload->initialize($config);

					if(!$this->upload->do_upload('department_image'))
					{
						echo $this->upload->display_errors();
					}
					else
					{
						$info = $this->upload->data();
						$image_path = base_url().'uploads/'.$info['file_name'];
						$data = array(
							'department_duriation'=>$department_duriation,
							'department_image'=>$image_path,
						);
						$insert = $this->Academic_Model->update_department($department_id,$data);
						if($insert)
						echo 'updated';
						else
						echo 'not updated';
					}
				}
				else
				{
					$data = array(
						'department_duriation'=>$department_duriation,
					);
					$insert = $this->Academic_Model->update_department($department_id,$data);
					if($insert)
					echo 'updated';
					else
					echo 'not updated';
				}
			}
			else
			{
				if(!empty($_FILES['department_image']['name']))
				{
					$config['upload_path']          = './uploads';
					$config['allowed_types']        = 'gif|jpg|png|jpeg';

					$this->upload->initialize($config);

					if(!$this->upload->do_upload('department_image'))
					{
						echo $this->upload->display_errors();
					}
					else
					{
						$info = $this->upload->data();
						$image_path = base_url().'uploads/'.$info['file_name'];
						$data = array(
							'department_name'=>$department_name,
							'department_duriation'=>$department_duriation,
							'department_image'=>$image_path,
						);
						$insert = $this->Academic_Model->update_department($department_id,$data);
						if($insert)
						echo 'updated';
						else
						echo 'not updated';
					}
				}
				else
				{
					$data = array(
						'department_name'=>$department_name,
						'department_duriation'=>$department_duriation,
					);
					$insert = $this->Academic_Model->update_department($department_id,$data);
					if($insert)
					echo 'updated';
					else
					echo 'not updated';
				}
			}
		}
	}

	public function delete_department($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$delete_department = $this->Academic_Model->delete_department($id);
		if($delete_department)
		redirect($this->agent->referrer());
	}

	public function add_semester()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('department_id','department_id','required');
		$this->form_validation->set_rules('semester','semester','required');
		if($this->form_validation->run()==FALSE)
		{
			echo 'Something Went Wrong!';
		}
		else
		{
			$department_id = $this->input->post('department_id');
			$semester = $this->input->post('semester');
			$data = array(
				'department_id'=>$department_id,
				'semester_name'=>$semester
			);
			$check_semester = $this->Academic_Model->check_semester($data);
			if($check_semester == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$insert = $this->Academic_Model->add_semester($data);
				if($insert)
				echo 'inserted';
				else
				echo 'not_inserted';
			}
		}
	}

	public function get_semesters()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$get_semester = $this->Academic_Model->get_semesters();
		if($get_semester)
		return $get_semester;
	}

	public function delete_semester($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$delete_semester = $this->Academic_Model->delete_semester($id);
		if($delete_semester)
		redirect($this->agent->referrer());
	}

	public function update_semester()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('department_id','department_id','required');
		$this->form_validation->set_rules('semester','semester','required');
		if($this->form_validation->run()==FALSE)
		{
			echo 'Something Went Wrong!';
		}
		else
		{
			$semester_id = $this->input->post('semester_id');
			$department_id = $this->input->post('department_id');
			$semester = $this->input->post('semester');
			$data = array(
				'department_id'=>$department_id,
				'semester_name'=>$semester
			);
			$check_semester = $this->Academic_Model->check_semester($data);
			if($check_semester == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$update = $this->Academic_Model->update_semester($semester_id,$data);
				if($update)
				echo 'updated';
				else
				echo 'not_updatedd';
			}
		}
	}
}
