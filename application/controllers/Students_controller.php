<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students_controller extends CI_Controller {

	public function student_details()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_student_details'] = $this->Students_Model->get_student_details();
		$data['get_department'] = $this->Academic_Model->get_departments();
		$data['get_student_category'] = $this->Students_Model->get_student_category();
		$data['get_session'] = $this->Settings_Model->get_session();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/student_details');
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/student_details');
		$this->load->view('admin/partials/footer_close');
	}

	public function student_admission()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$data['get_student_category'] = $this->Students_Model->get_student_category();
		$data['get_department'] = $this->Academic_Model->get_departments();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/student_admission',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/student_admission');
		$this->load->view('admin/partials/footer_close');
	}

	public function online_admission()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_student_details'] = $this->Students_Model->get_student_details_result();
		$data['get_department'] = $this->Academic_Model->get_departments();
		$data['get_student_category'] = $this->Students_Model->get_student_category();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/online_admission',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/online_admission');
		$this->load->view('admin/partials/footer_close');
	}

	public function online_admission_details($admission_id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_student_details'] = $this->Students_Model->get_student_details_by_id($admission_id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/online_admission_details',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/online_admission');
		$this->load->view('admin/partials/footer_close');
	}
	
	public function rejected_application()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_rejected_application'] = $this->Students_Model->get_rejected_application();
		$data['get_session'] = $this->Settings_Model->get_session();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/rejected_application',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/rejected_application');
		$this->load->view('admin/partials/footer_close');
	}

	public function student_category()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_student_category'] = $this->Students_Model->get_student_category();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/student_category',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/student_category');
		$this->load->view('admin/partials/footer_close');
	}

	public function edit_student_category($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_student_category'] = $this->Students_Model->get_student_category_by_id($id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/edit_student_category',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/update_student_category');
		$this->load->view('admin/partials/footer_close');
	}

	public function add_student_category()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('student_category','student_category','required');
		if($this->form_validation->run() == FALSE)
		{
			echo 'Something went wrong!';
		}
		else
		{
			$student_category = $this->input->post('student_category');
			$check_student_category = $this->Students_Model->check_student_category($student_category);
			if($check_student_category == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$data = array(
					'student_cat_name'=>$student_category
				);
				$insert = $this->Students_Model->add_student_category($data);
				if($insert)
				echo 'inserted';
				else
				echo 'not inserted';
			}
		}
	}

	public function update_student_category()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('student_category','student_category','required');
		if($this->form_validation->run() == FALSE)
		{
			echo 'Something went wrong!';
		}
		else
		{
			$student_category_id = $this->input->post('student_category_id');
			$student_category = $this->input->post('student_category');
			$check_student_category = $this->Students_Model->check_student_category($student_category);
			if($check_student_category == 1)
			{
				echo 'already_exist';
			}
			else
			{
				$data = array(
					'student_cat_name'=>$student_category
				);
				$update = $this->Students_Model->update_student_category($student_category_id,$data);
				if($update)
				echo 'updated';
				else
				echo 'not updated';
			}
		}
	}

	public function delete_student_category($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$delete = $this->Students_Model->delete_student_category($id);
		if($delete)
		redirect($this->agent->referrer());
	}

	public function student_online_admission()
	{
		$candidate_name = $this->input->post('candidate_name');
		$guardian_name = $this->input->post('guardian_name');
		$guardian_occupation = $this->input->post('guardian_occupation');
		$mother_name = $this->input->post('mother_name');
		$mother_occupation = $this->input->post('mother_occupation');
		$guardian_mobile = $this->input->post('father_mobile');
		$mother_mobile = $this->input->post('mother_mobile');
		$candidate_mobile = $this->input->post('candidate_mobile');
		$aadhar_number = $this->input->post('aadhar_number');
		$nationality = $this->input->post('nationality');
		$religion = $this->input->post('religion');
		$caste = $this->input->post('caste');
		$date_of_birth = $this->input->post('date_of_birth');
		$department = $this->input->post('department');
		$gender = $this->input->post('gender');
		$marital_status = $this->input->post('marital_status');
		$belongs = $this->input->post('belongs');
		$mother_tongue = $this->input->post('mother_tongue');
		$candidate_email = $this->input->post('candidate_email');
		$eq_sc = $this->input->post('eq_sc');
		$eq_q = $this->input->post('eq_q');
		$eq_py = $this->input->post('eq_py');
		$eq_tm = $this->input->post('eq_tm');
		$eq_per = $this->input->post('eq_per');
		$eq_sc1 = $this->input->post('eq_sc1');
		$eq_q1 = $this->input->post('eq_q1');
		$eq_py1 = $this->input->post('eq_py1');
		$eq_tm1 = $this->input->post('eq_tm1');
		$eq_per1 = $this->input->post('eq_per1');
		$eq_sc2 = $this->input->post('eq_sc2');
		$eq_q2 = $this->input->post('eq_q2');
		$eq_py2 = $this->input->post('eq_py2');
		$eq_tm2 = $this->input->post('eq_tm2');
		$eq_per2 = $this->input->post('eq_per2');
		$present_address = $this->input->post('present_address');
		$permanenet_address = $this->input->post('permanent_address');
		$get_session = $this->Settings_Model->get_active_session();
		if($eq_sc1==''&&$eq_q1==''&&$eq_py1==''&&$eq_tm1==''&&$eq_per1==''&&$eq_sc2==''&&$eq_q2==''&&$eq_py2==''&&$eq_tm2==''&&$eq_per2=='')
		{
			$config['upload_path']          = './uploads/admission';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
	
			$this->upload->initialize($config);
	
			if(!$this->upload->do_upload('aadhar_upload'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$info = $this->upload->data();
				$image_path = base_url().'uploads/admission/'.$info['file_name'];
	
				if(!$this->upload->do_upload('aadhar_upload1'))
				{
					echo $this->upload->display_errors();
				}
				else
				{
					$info = $this->upload->data();
					$image_path1 = base_url().'uploads/admission/'.$info['file_name'];
	
					if(!$this->upload->do_upload('marks_upload'))
					{
						echo $this->upload->display_errors();
					}
					else
					{
						$info = $this->upload->data();
						$image_path2 = base_url().'uploads/admission/'.$info['file_name'];
	
						if(!$this->upload->do_upload('photo_upload'))
						{
							echo $this->upload->display_errors();
						}
						else
						{
							$info = $this->upload->data();
							$image_path3 = base_url().'uploads/admission/'.$info['file_name'];
							$data = array(
								'candidate_name'=>$candidate_name,
								'father_name'=>$guardian_name,
								'father_occuption'=>$guardian_occupation,
								'mother_name'=>$mother_name,
								'mother_occuption'=>$mother_occupation,
								'father_mobile'=>$guardian_mobile,
								'mother_mobile'=>$mother_mobile,
								'candidate_mobile'=>$candidate_mobile,
								'aadhar_number'=>$aadhar_number,
								'nationality'=>$nationality,
								'religion'=>$religion,
								'caste'=>$caste,
								'date_of_birth'=>$date_of_birth,
								'department'=>$department,
								'gender'=>$gender,
								'marital_status'=>$marital_status,
								'candidate_belongs'=>$belongs,
								'mother_tongue'=>$mother_tongue,
								'candidate_email'=>$candidate_email,
								'eq_sc'=>$eq_sc,
								'eq_q'=>$eq_q,
								'eq_yp'=>$eq_py,
								'eq_tm'=>$eq_tm,
								'eq_per'=>$eq_per,
								'present_address'=>$present_address,
								'permanent_address'=>$permanenet_address,
								'admission_session'=>$get_session->session_id,
								'candidate_aadhar_upload'=>$image_path,
								'candidate_aadhar1_upload'=>$image_path1,
								'candidate_marks_upload'=>$image_path2,
								'candidate_photo_upload'=>$image_path3,
							);
							$admission = $this->Students_Model->add_admission($data);
							if($admission)
							{
                    			$this->load->config('email');
                                $from = $this->config->item('smtp_user');
                        
                                $this->email->set_newline("\r\n");
                                $this->email->from('administration@svp.com');
                                $this->email->to($candidate_email);
                                $message = $this->email->message('Your application has been Submitted successfully. We will review and send you the approval notification of the application.');
                        		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
                                $message_data = array(
                                    'message' => $message,
                                    'institute_logo' => $get_general_settings->institute_logo,
                                    'institute_name' => $get_general_settings->institute_name,
                                    );
                                $this->email->message($this->load->view('email/application_applied_template.php',$message_data,TRUE));
                        
                                if ($this->email->send()) {
        							echo 'inserted';
                                } else {
        							echo 'error';
                                }
							}
							else
							{
							    echo 'error';
							}
						}
					}
				}
			}
		}
		else
		{
			if($eq_sc1!=''&&$eq_q1!=''&&$eq_py1!=''&&$eq_tm1!=''&&$eq_per1!=''&&$eq_sc2==''&&$eq_q2==''&&$eq_py2==''&&$eq_tm2==''&&$eq_per2=='')
			{
				$config['upload_path']          = './uploads/admission';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
		
				$this->upload->initialize($config);
		
				if(!$this->upload->do_upload('aadhar_upload'))
				{
					echo $this->upload->display_errors();
				}
				else
				{
					$info = $this->upload->data();
					$image_path = base_url().'uploads/admission/'.$info['file_name'];
		
					if(!$this->upload->do_upload('aadhar_upload1'))
					{
						echo $this->upload->display_errors();
					}
					else
					{
						$info = $this->upload->data();
						$image_path1 = base_url().'uploads/admission/'.$info['file_name'];
		
						if(!$this->upload->do_upload('marks_upload'))
						{
							echo $this->upload->display_errors();
						}
						else
						{
							$info = $this->upload->data();
							$image_path2 = base_url().'uploads/admission/'.$info['file_name'];
		
							if(!$this->upload->do_upload('photo_upload'))
							{
								echo $this->upload->display_errors();
							}
							else
							{
								$info = $this->upload->data();
								$image_path3 = base_url().'uploads/admission/'.$info['file_name'];
								$data = array(
									'candidate_name'=>$candidate_name,
									'father_name'=>$guardian_name,
									'father_occuption'=>$guardian_occupation,
									'mother_name'=>$mother_name,
									'mother_occuption'=>$mother_occupation,
									'father_mobile'=>$guardian_mobile,
									'mother_mobile'=>$mother_mobile,
									'candidate_mobile'=>$candidate_mobile,
									'aadhar_number'=>$aadhar_number,
									'nationality'=>$nationality,
									'religion'=>$religion,
									'caste'=>$caste,
									'date_of_birth'=>$date_of_birth,
									'department'=>$department,
									'gender'=>$gender,
									'marital_status'=>$marital_status,
									'candidate_belongs'=>$belongs,
									'mother_tongue'=>$mother_tongue,
									'candidate_email'=>$candidate_email,
									'eq_sc1'=>$eq_sc1,
									'eq_q1'=>$eq_q1,
									'eq_yp1'=>$eq_py1,
									'eq_tm1'=>$eq_tm1,
									'eq_per1'=>$eq_per1,
									'present_address'=>$present_address,
									'permanent_address'=>$permanenet_address,
									'admission_session'=>$get_session->session_id,
									'candidate_aadhar_upload'=>$image_path,
									'candidate_aadhar1_upload'=>$image_path1,
									'candidate_marks_upload'=>$image_path2,
									'candidate_photo_upload'=>$image_path3,
								);
								$admission = $this->Students_Model->add_admission($data);
    							if($admission)
    							{
                        			$this->load->config('email');
                                    $from = $this->config->item('smtp_user');
                            
                                    $this->email->set_newline("\r\n");
                                    $this->email->from('administration@svp.com');
                                    $this->email->to($candidate_email);
                                    $this->email->subject('Admission Confirmation');
                                    $message = $this->email->message('Your application has been Submitted successfully. We will review and send you the approval notification of the application.');
                            		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
                                    $message_data = array(
                                        'message' => $message,
                                        'institute_logo' => $get_general_settings->institute_logo,
                                        'institute_name' => $get_general_settings->institute_name,
                                        );
                                    $this->email->message($this->load->view('email/application_applied_template.php',$message_data,TRUE));
                            
                                    if ($this->email->send()) {
            							echo 'inserted';
                                    } else {
            							echo 'error';
                                    }
    							}
    							else
    							{
    							    echo 'error';
    							}
							}
						}
					}
				}
			}
			else
			{
				if($eq_sc1==''&&$eq_q1==''&&$eq_py1==''&&$eq_tm1==''&&$eq_per1==''&&$eq_sc2!=''&&$eq_q2!=''&&$eq_py2!=''&&$eq_tm2!=''&&$eq_per2!='')
				{
					$config['upload_path']          = './uploads/admission';
					$config['allowed_types']        = 'gif|jpg|png|jpeg';
			
					$this->upload->initialize($config);
			
					if(!$this->upload->do_upload('aadhar_upload'))
					{
						echo $this->upload->display_errors();
					}
					else
					{
						$info = $this->upload->data();
						$image_path = base_url().'uploads/admission/'.$info['file_name'];
			
						if(!$this->upload->do_upload('aadhar_upload1'))
						{
							echo $this->upload->display_errors();
						}
						else
						{
							$info = $this->upload->data();
							$image_path1 = base_url().'uploads/admission/'.$info['file_name'];
			
							if(!$this->upload->do_upload('marks_upload'))
							{
								echo $this->upload->display_errors();
							}
							else
							{
								$info = $this->upload->data();
								$image_path2 = base_url().'uploads/admission/'.$info['file_name'];
			
								if(!$this->upload->do_upload('photo_upload'))
								{
									echo $this->upload->display_errors();
								}
								else
								{
									$info = $this->upload->data();
									$image_path3 = base_url().'uploads/admission/'.$info['file_name'];
									$data = array(
										'candidate_name'=>$candidate_name,
										'father_name'=>$guardian_name,
										'father_occuption'=>$guardian_occupation,
										'mother_name'=>$mother_name,
										'mother_occuption'=>$mother_occupation,
										'father_mobile'=>$guardian_mobile,
										'mother_mobile'=>$mother_mobile,
										'candidate_mobile'=>$candidate_mobile,
										'aadhar_number'=>$aadhar_number,
										'nationality'=>$nationality,
										'religion'=>$religion,
										'caste'=>$caste,
										'date_of_birth'=>$date_of_birth,
										'department'=>$department,
										'gender'=>$gender,
										'marital_status'=>$marital_status,
										'candidate_belongs'=>$belongs,
										'mother_tongue'=>$mother_tongue,
										'candidate_email'=>$candidate_email,
										'eq_sc1'=>$eq_sc1,
										'eq_q1'=>$eq_q1,
										'eq_yp1'=>$eq_py1,
										'eq_tm1'=>$eq_tm1,
										'eq_per1'=>$eq_per1,
										'present_address'=>$present_address,
										'permanent_address'=>$permanenet_address,
										'admission_session'=>$get_session->session_id,
										'candidate_aadhar_upload'=>$image_path,
										'candidate_aadhar1_upload'=>$image_path1,
										'candidate_marks_upload'=>$image_path2,
										'candidate_photo_upload'=>$image_path3,
									);
									$admission = $this->Students_Model->add_admission($data);
        							if($admission)
        							{
                            			$this->load->config('email');
                                        $from = $this->config->item('smtp_user');
                                
                                        $this->email->set_newline("\r\n");
                                        $this->email->from('administration@svp.com');
                                        $this->email->to($candidate_email);
                                        $this->email->subject('Admission Confirmation');
                                        $message = $this->email->message('Your application has been Submitted successfully. We will review and send you the approval notification of the application.');
                                		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
                                        $message_data = array(
                                            'message' => $message,
                                            'institute_logo' => $get_general_settings->institute_logo,
                                            'institute_name' => $get_general_settings->institute_name,
                                            );
                                        $this->email->message($this->load->view('email/application_applied_template.php',$message_data,TRUE));
                                
                                        if ($this->email->send()) {
                							echo 'inserted';
                                        } else {
                							echo 'error';
                                        }
        							}
        							else
        							{
        							    echo 'error';
        							}
								}
							}
						}
					}
				}
				else
				{
					$config['upload_path']          = './uploads/admission';
					$config['allowed_types']        = 'gif|jpg|png|jpeg';
			
					$this->upload->initialize($config);
			
					if(!$this->upload->do_upload('aadhar_upload'))
					{
						echo $this->upload->display_errors();
					}
					else
					{
						$info = $this->upload->data();
						$image_path = base_url().'uploads/admission/'.$info['file_name'];
			
						if(!$this->upload->do_upload('aadhar_upload1'))
						{
							echo $this->upload->display_errors();
						}
						else
						{
							$info = $this->upload->data();
							$image_path1 = base_url().'uploads/admission/'.$info['file_name'];
			
							if(!$this->upload->do_upload('marks_upload'))
							{
								echo $this->upload->display_errors();
							}
							else
							{
								$info = $this->upload->data();
								$image_path2 = base_url().'uploads/admission/'.$info['file_name'];
			
								if(!$this->upload->do_upload('photo_upload'))
								{
									echo $this->upload->display_errors();
								}
								else
								{
									$info = $this->upload->data();
									$image_path3 = base_url().'uploads/admission/'.$info['file_name'];
									$data = array(
										'candidate_name'=>$candidate_name,
										'father_name'=>$guardian_name,
										'father_occuption'=>$guardian_occupation,
										'mother_name'=>$mother_name,
										'mother_occuption'=>$mother_occupation,
										'father_mobile'=>$guardian_mobile,
										'mother_mobile'=>$mother_mobile,
										'candidate_mobile'=>$candidate_mobile,
										'aadhar_number'=>$aadhar_number,
										'nationality'=>$nationality,
										'religion'=>$religion,
										'caste'=>$caste,
										'date_of_birth'=>$date_of_birth,
										'department'=>$department,
										'gender'=>$gender,
										'marital_status'=>$marital_status,
										'candidate_belongs'=>$belongs,
										'mother_tongue'=>$mother_tongue,
										'candidate_email'=>$candidate_email,
										'eq_sc'=>$eq_sc,
										'eq_q'=>$eq_q,
										'eq_yp'=>$eq_py,
										'eq_tm'=>$eq_tm,
										'eq_per'=>$eq_per,
										'eq_sc1'=>$eq_sc1,
										'eq_q1'=>$eq_q1,
										'eq_yp1'=>$eq_py1,
										'eq_tm1'=>$eq_tm1,
										'eq_per1'=>$eq_per1,
										'eq_sc2'=>$eq_sc2,
										'eq_q2'=>$eq_q2,
										'eq_yp2'=>$eq_py2,
										'eq_tm2'=>$eq_tm2,
										'eq_per2'=>$eq_per2,
										'present_address'=>$present_address,
										'permanent_address'=>$permanenet_address,
										'admission_session'=>$get_session->session_id,
										'candidate_aadhar_upload'=>$image_path,
										'candidate_aadhar1_upload'=>$image_path1,
										'candidate_marks_upload'=>$image_path2,
										'candidate_photo_upload'=>$image_path3,
									);
									$admission = $this->Students_Model->add_admission($data);
        							if($admission)
        							{
                            			$this->load->config('email');
                                        $from = $this->config->item('smtp_user');
                                
                                        $this->email->set_newline("\r\n");
                                        $this->email->from('administration@svp.com');
                                        $this->email->to($candidate_email);
                                        $this->email->subject('Admission Confirmation');
                                        $message = $this->email->message('Your application has been Submitted successfully. We will review and send you the approval notification of the application.');
                                		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
                                        $message_data = array(
                                            'message' => $message,
                                            'institute_logo' => $get_general_settings->institute_logo,
                                            'institute_name' => $get_general_settings->institute_name,
                                            );
                                        $this->email->message($this->load->view('email/application_applied_template.php',$message_data,TRUE));
                                
                                        if ($this->email->send()) {
                							echo 'inserted';
                                        } else {
                							echo 'error';
                                        }
        							}
        							else
        							{
        							    echo 'error';
        							}
								}
							}
						}
					}
				}
			}
		}
	}

	public function approve_online_admission($admission_id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data = array(
			'admission_status'=>1,
		);
		$approve = $this->Students_Model->approve_online_admission($admission_id,$data);
		if($approve)
		{
			$get_student = $this->Students_Model->get_student_details_by_id_by_row($admission_id);
			$this->load->config('email');
            $from = $this->config->item('smtp_user');
    
            $this->email->set_newline("\r\n");
            $this->email->from('administration@svp.com');
            $this->email->to($get_student->candidate_email);
            $this->email->subject('Admission application approval');
            $message = 'Your application has been appoved please visit the admisistration section for more details';
    		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
            $message_data = array(
                'message' => $message,
                'institute_logo' => $get_general_settings->institute_logo,
                'institute_name' => $get_general_settings->institute_name,
                );
            $this->email->message($this->load->view('email/application_approval_template.php',$message_data,TRUE));
    
            if ($this->email->send()) {
                ?>
                <script type="text/javascript">
                    alert("Email has been sent successfully.");
                    window.location = "<?php echo base_url(); ?>admin/online_admission/details/2";
                </script>
                <?php
            } else {
                show_error($this->email->print_debugger());
            }
		}
	}

	public function confirm_online_admission($admission_id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data = array(
			'admission_confirm'=>1,
		);
		$approve = $this->Students_Model->confirm_online_admission($admission_id,$data);
		if($approve)
		{
			$get_student = $this->Students_Model->get_student_details_by_id_by_row($admission_id);
			$this->load->config('email');
            $from = $this->config->item('smtp_user');
    
            $this->email->set_newline("\r\n");
            $this->email->from('administration@svp.com');
            $this->email->to($get_student->candidate_email);
            $this->email->subject('Admission application confirmation');
            $message = 'Your application has been confirmed successfully. Thank you for your co-operation and support.';
    		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
            $message_data = array(
                'message' => $message,
                'institute_logo' => $get_general_settings->institute_logo,
                'institute_name' => $get_general_settings->institute_name,
                );
            $this->email->message($this->load->view('email/application_confirmation_template.php',$message_data,TRUE));
    
            if ($this->email->send()) {
                ?>
                <script type="text/javascript">
                    alert("Email has been sent successfully.");
                    window.location = "<?php echo base_url(); ?>admin/online_admission/details/2";
                </script>
                <?php
            } else {
                show_error($this->email->print_debugger());
            }
		}
	}
	
	public function rejection_application()
	{
	    $candidate_email = $this->input->post('candidate_email');
	    $rejection_reason = $this->input->post('rejection_reason');
	    $data = array(
	        'admission_status' => 2,
	        'admission_confirm' => 2,
	        'application_rejection_reason' => $rejection_reason,
	        );
	    $update_reason = $this->Students_Model->update_rejection_reason($candidate_email,$data);
	    if($update_reason)
	    {
    		$this->load->config('email');
            $from = $this->config->item('smtp_user');
    
            $this->email->set_newline("\r\n");
            $this->email->from('administration@svp.com');
            $this->email->to($candidate_email);
            $this->email->subject('Admission application rejection');
    		$get_general_settings = $this->Settings_Model->get_general_settings_by_row();
            $message_data = array(
                'message' => $rejection_reason,
                'institute_logo' => $get_general_settings->institute_logo,
                'institute_name' => $get_general_settings->institute_name,
                );
            $this->email->message($this->load->view('email/application_rejection_template.php',$message_data,TRUE));
    
            if ($this->email->send()) {
                echo 'updated';
            } else {
                show_error($this->email->print_debugger());
            }
	    }
	    else
	    {
	        echo 'error';
	    }
	}
}
