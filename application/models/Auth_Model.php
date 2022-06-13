<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {
    public function check_user($email)
    {
        $this->db->where('user_email', $email);
        $query = $this->db->get('users');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }
    public function get_user($email)
    {
        $query = $this->db->get('users');
        $this->db->where('user_email', $email);
        return $query->row();
    }
    
    public function update_user_admin($data,$email)
    {
        $this->db->where('user_email',$email);
        $query = $this->db->update('users',$data);
        return $query;
    }

    public function get_user_by_session($email)
    {
        $this->db->where('user_email',$email);
        $query = $this->db->get('users');
        return $query->result();
    }
}