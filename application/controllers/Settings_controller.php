<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_controller extends CI_Controller {

	public function session()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/session_settings',$data);
		$this->load->view('admin/partials/footer');
        $this->load->view('admin/scripts/session');
		$this->load->view('admin/partials/footer_close');
	}

    public function general_settings()
    {
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/general_settings',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/general_settings');
		$this->load->view('admin/partials/footer_close');
    }

    public function frontcms_settings()
    {
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$data['get_slider'] = $this->Settings_Model->get_slider();
		$data['get_about'] = $this->Settings_Model->get_about();
		$data['get_grivance'] = $this->Settings_Model->get_grivance();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/frontcms_settings',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/frontcms_settings');
		$this->load->view('admin/partials/footer_close');
    }

	public function edit_slider($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_general_settings'] = $this->Settings_Model->get_general_settings();
		$data['get_slider'] = $this->Settings_Model->get_slider_by_id($id);
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/edit_slider',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/edit_slider');
		$this->load->view('admin/partials/footer_close');
	}

    public function profile_settings()
    {
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$data['get_session'] = $this->Settings_Model->get_session();
		$data['get_user'] = $this->Auth_Model->get_user_by_session($this->session->userdata('email'));
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/aside',$data);
		$this->load->view('admin/profile_settings',$data);
		$this->load->view('admin/partials/footer');
		$this->load->view('admin/scripts/profile_settings');
		$this->load->view('admin/partials/footer_close');
    }

	public function update_general_settings()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('institute_name', 'institute_name', 'required');
		$this->form_validation->set_rules('institute_code', 'institute_code', 'required');
		$this->form_validation->set_rules('tagline', 'tagline', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('session', 'session', 'required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			$institute_name = $this->input->post('institute_name');
			$institute_code = $this->input->post('institute_code');
			$tagline = $this->input->post('tagline');
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$session = $this->input->post('session');
			$data = array(
				'institute_name'=>$institute_name,
				'institute_code'=>$institute_code,
				'institute_tagline'=>$tagline,
				'institute_address'=>$address,
				'institute_phone'=>$phone,
				'institute_email'=>$email,
			);
			$update_general_settings = $this->Settings_Model->update_general_settings($data,$session);
			if($update_general_settings)
			echo 'updated';
			else
			echo 'error';
		}
	}

	public function update_logo()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$config['upload_path']          = './uploads';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('logo'))
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$info = $this->upload->data();
			$image_path = base_url().'uploads/'.$info['file_name'];
			$data = array(
				'institute_logo'=>$image_path,
			);
			$update_logo = $this->Settings_Model->update_logo($data);
			if($update_logo)
			echo 'updated';
			else
			echo 'error';
		}
	}

	public function update_favicon()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$config['upload_path']          = './uploads';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->upload->initialize($config);

		if(!$this->upload->do_upload('favicon'))
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$info = $this->upload->data();
			$image_path = base_url().'uploads/'.$info['file_name'];
			$data = array(
				'institute_favicon'=>$image_path,
			);
			$update_favicon = $this->Settings_Model->update_favicon($data);
			if($update_favicon)
			echo 'updated';
			else
			echo 'error';
		}
	}

    public function add_session()
    {
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('session', 'session', 'required');

        if($this->form_validation->run() == FALSE)
        {
            echo 'something went wrong!.';
        }
        else
        {
            $session = $this->input->post('session');
            $check_session = $this->Settings_Model->check_session($session);
            if($check_session == 1)
            {
                echo 'already_exist';
            }
            else
            {
                $data = array(
                    'session'=>$session
                );
                $insert = $this->Settings_Model->insert_session($data);
                if($insert)
                echo 'inserted';
                else
                echo 'not_inserted';
            }
        }
    }

	public function delete_session($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$delete_session = $this->Settings_Model->delete_session($id);
		if($delete_session)
		redirect($this->agent->referrer());
	}

	public function update_frontcms_settings()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$this->form_validation->set_rules('footer_text', 'footer_text', 'required');
		$this->form_validation->set_rules('whatsapp_url', 'whatsapp_url', 'required');
		$this->form_validation->set_rules('facebook_url', 'facebook_url', 'required');
		$this->form_validation->set_rules('twitter_url', 'twitter_url', 'required');
		$this->form_validation->set_rules('instagram_url', 'instagram_url', 'required');
		if($this->form_validation->run() == FALSE)
		{
            echo 'something went wrong!.';
		}
		else
		{
			if($this->input->post('frontcms'))
			{
				$front_cms = '1';
			}
			else
			{
				$front_cms = '0';
			}
			if($this->input->post('application'))
			{
				$application = '1';
			}
			else
			{
				$application = '0';
			}
			$footer_text = $this->input->post('footer_text');
			$whatsapp_url = $this->input->post('whatsapp_url');
			$facebook_url = $this->input->post('facebook_url');
			$twitter_url = $this->input->post('twitter_url');
			$instagram_url = $this->input->post('instagram_url');
			$data = array(
				'front_cms'=>$front_cms,
				'online_application'=>$application,
				'footer_text'=>$footer_text,
				'whatsapp_url'=>$whatsapp_url,
				'facebook_url'=>$facebook_url,
				'twitter_url'=>$twitter_url,
				'instagram_url'=>$instagram_url,
			);
			$update_frontcms_settings = $this->Settings_Model->update_frontcms_settings($data);
			if($update_frontcms_settings)
			echo 'updated';
			else
			echo 'error';
		}
	}

	public function add_cmsslider()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$slider_title = $this->input->post('slider_title');
		$slider_desc = $this->input->post('slider_desc');
		$config['upload_path']          = './uploads';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->upload->initialize($config);

		if(!$this->upload->do_upload('slider_img'))
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$info = $this->upload->data();
			$image_path = base_url().'uploads/'.$info['file_name'];
			$data = array(
				'slider_title'=>$slider_title,
				'slider_desc'=>$slider_desc,
				'slider_image'=>$image_path,
			);
			$add_slider = $this->Settings_Model->add_slider($data);
			if($add_slider)
			echo 'added';
			else
			echo 'error';
		}
	}

	public function update_slider()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$slider_id = $this->input->post('slider_id');
		$slider_title = $this->input->post('slider_title');
		$slider_desc = $this->input->post('slider_desc');
		
		if(!empty($_FILES['slider_image']['name']))
		{
			$config['upload_path']          = './uploads';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			$this->upload->initialize($config);

			if(!$this->upload->do_upload('slider_image'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$info = $this->upload->data();
				$image_path = base_url().'uploads/'.$info['file_name'];
				$data = array(
					'slider_title'=>$slider_title,
					'slider_desc'=>$slider_desc,
					'slider_image'=>$image_path,
				);
				$add_slider = $this->Settings_Model->update_slider1($data,$slider_id);
				if($add_slider)
				echo 'updated';
				else
				echo 'error';
			}
		}
		else
		{
			$data = array(
				'slider_title'=>$slider_title,
				'slider_desc'=>$slider_desc,
			);
			$update_slider = $this->Settings_Model->update_slider($data,$slider_id);
			if($update_slider)
			echo 'updated';
			else
			echo 'error';
		}
	}

	public function delete_slider($id)
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$delete_slider = $this->Settings_Model->delete_slider($id);
		if($delete_slider)
		redirect($this->agent->referrer());
	}

	public function update_about()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$about_title = $this->input->post('about_title');
		$about_desc = $this->input->post('about_desc');

		if(!empty($_FILES['about_image']['name']))
		{
			$config['upload_path']          = './uploads';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			$this->upload->initialize($config);

			if(!$this->upload->do_upload('about_image'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$info = $this->upload->data();
				$image_path = base_url().'uploads/'.$info['file_name'];
				$data = array(
					'about_title'=>$about_title,
					'about_desc'=>$about_desc,
					'about_image'=>$image_path,
				);
				$update_about = $this->Settings_Model->update_about1($data);
				if($update_about)
				echo 'updated';
				else
				echo 'error';
			}
		}
		else
		{
			$data = array(
				'about_title'=>$about_title,
				'about_desc'=>$about_desc,
			);
			$update_about = $this->Settings_Model->update_about($data);
			if($update_about)
			echo 'updated';
			else
			echo 'error';
		}
	}

	public function update_grivance()
	{
		if(!$this->session->userdata('email'))
		redirect(base_url());
		$grivance_title = $this->input->post('grivance_title');
		$grivance_desc = $this->input->post('grivance_desc');

		if(!empty($_FILES['grivance_image']['name']))
		{
			$config['upload_path']          = './uploads';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			$this->upload->initialize($config);

			if(!$this->upload->do_upload('grivance_image'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$info = $this->upload->data();
				$image_path = base_url().'uploads/'.$info['file_name'];
				$data = array(
					'grivance_title'=>$grivance_title,
					'grivance_desc'=>$grivance_desc,
					'grivance_image'=>$image_path,
				);
				$update_grivance = $this->Settings_Model->update_grivance1($data);
				if($update_grivance)
				echo 'updated';
				else
				echo 'error';
			}
		}
		else
		{
			$data = array(
				'grivance_title'=>$grivance_title,
				'grivance_desc'=>$grivance_desc,
			);
			$update_grivance = $this->Settings_Model->update_grivance($data);
			if($update_grivance)
			echo 'updated';
			else
			echo 'error';
		}
	}

	public function update_profile()
	{
		$username = $this->input->post('user_name');
		$user_email = $this->input->post('user_email');
		$new_password = $this->input->post('new_password');
		$has_password = password_hash($new_password, PASSWORD_DEFAULT);
		$data = array(
		    'user_name' => $username,
		    'user_email' => $user_email,
		    'user_pass' => $has_password,
		    );
		$check_user = $this->Auth_Model->check_user($user_email);
		if($check_user == 1)
		{
		    $update_user = $this->Auth_Model->update_user_admin($data,$user_email);
		    if($update_user)
		    {
		        echo 'updated';
		    }
		    else
		    {
		        echo 'error';
		    }
		}
	}
}
