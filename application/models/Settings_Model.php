<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_Model extends CI_Model {

    public function update_general_settings($general_settings,$session)
    {
        $query_general_settings = $this->db->update('general_settings',$general_settings);
        if($query_general_settings)
        {
            $data = array(
                'session_status'=>NULL,
            );
            $data1 = array(
                'session_status'=>'1',
            );
            $update_session = $this->db->update('session',$data);
            if($update_session)
            {
                $this->db->where('session_id',$session);
                $query = $this->db->update('session',$data1);
                return $query;
            }
        }
    }

    public function get_general_settings()
    {
        $query = $this->db->get('general_settings');
        return $query->result();
    }

    public function get_general_settings_by_row()
    {
        $query = $this->db->get('general_settings');
        return $query->row();
    }

    public function update_logo($logo)
    {
        $query = $this->db->update('general_settings',$logo);
        return $query;
    }

    public function update_favicon($favicon)
    {
        $query = $this->db->update('general_settings',$favicon);
        return $query;
    }

    public function update_frontcms_settings($frontcms)
    {
        $query = $this->db->update('general_settings',$frontcms);
        return $query;
    }

    public function get_session()
    {
        $query = $this->db->get('session');
        return $query->result();
    }

    public function get_active_session()
    {
        $this->db->where('session_status',1);
        $query = $this->db->get('session');
        return $query->row();
    }

    public function check_session($session)
    {
        $this->db->where('session',$session);
        $query = $this->db->get('session');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function insert_session($session)
    {
        $query = $this->db->insert('session',$session);
        return $query;
    }

    public function delete_session($id)
    {
        $this->db->where('session_id',$id);
        $query = $this->db->delete('session');
        return $query;
    }

    public function get_slider()
    {
        $query = $this->db->get('slider');
        return $query->result();
    }

    public function get_slider_by_id($id)
    {
        $this->db->where('slider_id',$id);
        $query = $this->db->get('slider');
        return $query->result();
    }

    public function add_slider($slider)
    {
        $query = $this->db->insert('slider',$slider);
        return $query;
    }

    public function update_slider($slider,$id)
    {
        $this->db->where('slider_id',$id);
        $query = $this->db->update('slider',$slider);
        return $query;
    }

    public function update_slider1($slider,$id)
    {
        $this->db->where('slider_id',$id);
        $query = $this->db->update('slider',$slider);
        return $query;
    }

    public function delete_slider($id)
    {
        $this->db->where('slider_id',$id);
        $query = $this->db->delete('slider');
        return $query;
    }

    public function get_about()
    {
        $query = $this->db->get('about');
        return $query->result();
    }

    public function update_about($about)
    {
        $query = $this->db->update('about',$about);
        return $query;
    }

    public function update_about1($about)
    {
        $query = $this->db->update('about',$about);
        return $query;
    }

    public function get_grivance()
    {
        $query = $this->db->get('grivance');
        return $query->result();
    }

    public function update_grivance($grivance)
    {
        $query = $this->db->update('grivance',$grivance);
        return $query;
    }

    public function update_grivance1($grivance)
    {
        $query = $this->db->update('grivance',$grivance);
        return $query;
    }
}