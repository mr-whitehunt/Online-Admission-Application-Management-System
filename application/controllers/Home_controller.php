<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function index()
	{
		$data['get_slider'] = $this->Settings_Model->get_slider();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$check_front_cms = $this->Settings_Model->get_general_settings_by_row();
		if($check_front_cms->front_cms != 1)
		redirect(base_url('grivance'));
		$data['get_about'] = $this->Settings_Model->get_about();
		$data['get_enquiry_cat'] = $this->Frontoffice_Model->get_enquiry_cat();
		$data['get_grivance'] = $this->Settings_Model->get_grivance();
		$data['get_department'] = $this->Academic_Model->get_departments();
		$this->load->view('partials/header',$data);
		$this->load->view('partials/navbar',$data);
		$this->load->view('index',$data);
		$this->load->view('partials/footer',$data);
		$this->load->view('scripts/contact');
		$this->load->view('partials/footer_close');
	}

	public function grivance()
	{
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance',$data);
		$this->load->view('partials/footer1');
		$this->load->view('partials/footer_close');
	}

	public function grivance_start()
	{
		$this->session->sess_destroy();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('student_grivance',$data);
		$this->load->view('partials/footer1');
		$this->load->view('scripts/start_grivance');
		$this->load->view('partials/footer_close');
	}

	public function grivance_start_public()
	{
		$this->session->sess_destroy();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance_start_public');
		$this->load->view('partials/footer1');
		$this->load->view('scripts/start_grivance');
		$this->load->view('partials/footer_close');
	}

	public function grivance_otp()
	{
		if(!$this->session->userdata('grivance_email'))
		redirect(base_url('grivance_start_public'));
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance_otp',$data);
		$this->load->view('partials/footer1');
		$this->load->view('scripts/public_otp_verify');
		$this->load->view('partials/footer_close');
	}
	
	public function grivance_student_otp()
	{
		if(!$this->session->userdata('grivance_email'))
		redirect(base_url('grivance_start_public'));
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance_student_otp',$data);
		$this->load->view('partials/footer1');
		$this->load->view('scripts/student_otp_verify');
		$this->load->view('partials/footer_close');
	}

	public function grivance_public_details()
	{
	    if(!$this->session->userdata('grivance_email') && !$this->session->userdata('grivance_verify') == TRUE)
		redirect(base_url('grivance_start_public'));
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance_details',$data);
		$this->load->view('partials/footer1');
		$this->load->view('scripts/start_grivance');
		$this->load->view('partials/footer_close');
	}

	public function grivance_student_details()
	{
	    if(!$this->session->userdata('grivance_email') && !$this->session->userdata('grivance_student_verify') == TRUE)
		redirect(base_url('grivance_start_public'));
		else
		$data['get_complaint_category'] = $this->Home_Model->get_complaint_category();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance_stu_details',$data);
		$this->load->view('partials/footer1');
		$this->load->view('scripts/start_grivance');
		$this->load->view('partials/footer_close');
	}

	public function grivance_public()
	{
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('partials/header',$data);
		$this->load->view('grivance_public',$data);
		$this->load->view('partials/footer1');
		$this->load->view('partials/footer_close');
	}

	public function application()
	{
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$data['get_student_category'] = $this->Students_Model->get_student_category();
		$data['get_department'] = $this->Academic_Model->get_departments();
		$this->load->view('partials/header',$data);
		$this->load->view('application',$data);
		$this->load->view('partials/footer1');
		$this->load->view('scripts/online_application');
		$this->load->view('partials/footer_close');
	}

	public function add_contact()
	{
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$contact_type = $this->input->post('contact_type');
			$description = $this->input->post('description');
			$get_session = $this->Settings_Model->get_active_session();
			$data = array(
				'enquiry_name'=>$name,
				'enquiry_type'=>$contact_type,
				'enquiry_details'=>$description,
				'enquiry_contact'=>$email,
				'enquiry_session'=>$get_session->session_id,
			);
			$add_contact = $this->Frontoffice_Model->insert_contact($data);
			if($add_contact)
			echo 'inserted';
			else
			echo 'error';
		}
	}
	
	public function add_public_grivance()
	{
	    $email = $this->input->post('public_email');
	    $rand = rand(000000,999999);
	    $data = array(
	        'otp' => $rand,
	        );
	    $this->load->config('email');
        $from = $this->config->item('smtp_user');

        $this->email->set_newline("\r\n");
        $this->email->from('administration@svp.com');
        $this->email->to($email);
        $this->email->subject('One Time Password | Grivance Verification');
        $this->email->message($this->load->view('email/otp_template.php',$data,TRUE));

        if ($this->email->send()) {
            $data = array(
                'grivance_email'=>$email,
                'grivance_sess'=>$rand
                );
            $otp = array(
                'grivance_sess'=>$rand,
                );
            $check_grivance_verify = $this->Home_Model->check_grivance_data($email);
            if($check_grivance_verify->grivance_email == $email)
            {
                $update_grivance_data = $this->Home_Model->update_griv_data($email,$otp);
                if($update_grivance_data)
                {
					$user_data=array(
						'grivance_email'=>$email,
					);
					$this->session->set_userdata($user_data);
                    echo 'inserted';
                }
                else
                echo 'error';
            }
            else
            {
                $add_grivance_data = $this->Home_Model->insert_griv_data($data);
                if($add_grivance_data)
                {
					$user_data=array(
						'grivance_email'=>$email,
					);
					$this->session->set_userdata($user_data);
                    echo 'inserted';
                }                    
    			else
    			echo 'error';
            }
        } else {
			echo 'error';
        }
	}
	
	public function grivance_start_student()
	{
	    $email = $this->input->post('email');
	    $rand = rand(000000,999999);
	    $data = array(
	        'otp' => $rand,
	        );
	    $check_student_email = $this->Students_Model->get_student_by_email($email);
	    if($check_student_email->admission_status == 1 && $check_student_email->admission_confirm == 1)
	    {
    	    $this->load->config('email');
            $from = $this->config->item('smtp_user');
    
            $this->email->set_newline("\r\n");
            $this->email->from('administration@svp.com');
            $this->email->to($email);
            $this->email->subject('One Time Password | Grivance Verification');
            $this->email->message($this->load->view('email/otp_template.php',$data,TRUE));
    
            if ($this->email->send()) {
                $data = array(
                    'candidate_otp'=>$rand,
                    );
                $update_student_otp = $this->Home_Model->update_student_otp($email,$data);
                if($update_student_otp)
                {
					$user_data=array(
						'grivance_email'=>$email,
					);
					$this->session->set_userdata($user_data);
                    echo 'inserted';
                }
                else
                {
                echo 'error';
                }
            }
	    }
	    
	}
	
	public function grivance_otp_verify()
	{
	    if($this->session->userdata('grivance_email'))
	    {
    	    $email = $this->session->userdata('grivance_email');
    	    $otp = $this->input->post('otp');
    	    $get_grivance_data = $this->Home_Model->get_grivance_data($email);
    	    if($get_grivance_data->grivance_email == $email && $get_grivance_data->grivance_sess == $otp)
    	    {
				$user_data=array(
					'grivance_verify'=>TRUE,
				);
				$this->session->set_userdata($user_data);
        	    echo 'verified';
    	    }
    	    else
    	    {
        	    echo 'error';
    	    }
	    }
	}
	
	public function grivance_student_otp_verify()
	{
	    $email = $this->session->userdata('grivance_email');
	    $otp = $this->input->post('otp');
	    $get_student_otp = $this->Students_Model->get_student_by_email($email);
	    if($get_student_otp->candidate_email == $email && $get_student_otp->candidate_otp == $otp)
	    {
    	    $user_data = array(
    	        'grivance_student_verify'=>TRUE,
    	        );
    	       $this->session->set_userdata($user_data);
    	    echo 'verified';
	    }
	    else
	    {
	        echo 'error';
	    }
	}
	
	public function add_public_grivance_details()
	{
	    if($this->session->userdata('grivance_email'))
	    {
	        $public_name = $this->input->post('public_name');
	        $public_email = $this->session->userdata('grivance_email');
	        $public_mobile = $this->input->post('public_mobile');
	        $public_subject = $this->input->post('public_subject');
	        $public_complaint = $this->input->post('public_complaint');
		    $get_session = $this->Settings_Model->get_active_session();
		    
		    $data = array(
		        'complaint_public_name' => $public_name,
		        'complaint_public_email' => $public_email,
		        'complaint_public_mobile' => $public_mobile,
		        'complaint_public_subject' => $public_subject,
		        'complaint_public' => $public_complaint,
		        'complaint_public_session' => $get_session->session_id,
		        );
		        
		    $add_public_complaint = $this->Home_Model->add_public_complaint_details($data);
		    if($add_public_complaint)
		    {
		        
        		$this->session->sess_destroy();
    		    echo 'inserted';
		    }
		    else
		    echo 'error';
	    }
	}
	
	public function add_student_grivance_details()
	{
	    if($this->session->userdata('grivance_email'))
	    {
	        $get_student = $this->Students_Model->get_student_by_email($this->session->userdata('grivance_email'));
	        if($get_student)
	        {
	            $student_id = $get_student->online_admission_id;
	            $dept_id = $get_student->department;
	            $subject = $this->input->post('subject');
	            $complaint = $this->input->post('description');
    		    $get_session = $this->Settings_Model->get_active_session();
    		    
    		    $data = array(
    		        'student_id' => $student_id,
    		        'dept_id' => $dept_id,
    		        'complaint_subject' => $subject,
    		        'complaint' => $complaint,
    		        'complaint_session' => $get_session->session_id,
    		        );
    		        
    		    $add_student_complaint = $this->Home_Model->add_student_complaint_details($data);
    		    if($add_student_complaint)
    		    {
    		        
            		$this->session->sess_destroy();
        		    echo 'inserted';
    		    }
    		    else
    		    echo 'error';
	        }
	    }
	}
}
