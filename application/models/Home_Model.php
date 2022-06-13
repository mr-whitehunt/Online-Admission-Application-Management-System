<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {
    
    public function check_grivance_data($email)
    {
        $this->db->where('grivance_email',$email);
        $query = $this->db->get('grivance_verification');
        return $query->row();
    }
    
    public function insert_griv_data($griv)
    {
        $query = $this->db->insert('grivance_verification',$griv);
        return $query;
    }
    
    public function update_griv_data($email,$otp)
    {
        $this->db->where('grivance_email',$email);
        $query = $this->db->update('grivance_verification',$otp);
        return $query;
    }
    
    public function get_grivance_data($email)
    {
        $this->db->where('grivance_email',$email);
        $query = $this->db->get('grivance_verification');
        return $query->row();
    }
    
    public function add_public_complaint_details($public_complaint_details)
    {
        $query = $this->db->insert('complaint_public',$public_complaint_details);
        return $query;
    }
    
    public function add_student_complaint_details($student_complaint_details)
    {
        $query = $this->db->insert('complaint',$student_complaint_details);
        return $query;
    }
    
    public function update_student_otp($email,$otp)
    {
        $this->db->where('candidate_email',$email);
        $query = $this->db->update('admission',$otp);
        return $query;
    }
    
    public function get_complaint_category()
    {
        $query = $this->db->get('complaint_category');
        return $query->result();
    }
}