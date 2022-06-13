<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {
    
    public function get_applications_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
        $data = array(
            'admission_session' => $get_session->session_id,
            'admission_status' => 1,
            'admission_confirm' => 1,
            'application_rejection_reason' => NULL,
            );
        $this->db->select('*');
        $this->db->from('admission');
        $this->db->where($data);
        return $this->db->count_all_results();
    }
    
    public function get_verified_applications_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
        $data = array(
            'admission_session' => $get_session->session_id,
            'admission_status' => 1,
            'admission_confirm' => NULL,
            'application_rejection_reason' => NULL,
            );
        $this->db->select('*');
        $this->db->from('admission');
        $this->db->where($data);
        return $this->db->count_all_results();
    }
    
    public function get_unverified_applications_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
        $data = array(
            'admission_session' => $get_session->session_id,
            'admission_status' => NULL,
            'admission_confirm' => NULL,
            'application_rejection_reason' => NULL,
            );
        $this->db->select('*');
        $this->db->from('admission');
        $this->db->where($data);
        return $this->db->count_all_results();
    }
    
    public function get_rejected_applications_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
        $data = array(
            'admission_session' => $get_session->session_id,
            'admission_status' => 2,
            'admission_confirm' => 2,
            'application_rejection_reason' => !NULL,
            );
        $this->db->select('*');
        $this->db->from('admission');
        $this->db->where($data);
        return $this->db->count_all_results();
    }
    
    public function get_public_complaint_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
		$data = array(
		    'complaint_public_session' => $get_session->session_id,
		    );
		$this->db->select('*');
		$this->db->from('complaint_public');
		$this->db->where($data);
		return $this->db->count_all_results();
    }
    
    public function get_student_complaint_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
		$data = array(
		    'complaint_session' => $get_session->session_id,
		    );
		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where($data);
		return $this->db->count_all_results();
    }
    
    public function get_enquiry_count()
    {
		$get_session = $this->Settings_Model->get_active_session();
		$data = array(
		    'enquiry_session' => $get_session->session_id,
		    );
		$this->db->select('*');
		$this->db->from('enquiry');
		$this->db->where($data);
		return $this->db->count_all_results();
    }
    
    public function get_department_count()
    {
        $this->db->select('*');
        $this->db->from('departments');
        return $this->db->count_all_results();
    }
    
    public function get_complaint_category_count()
    {
        $this->db->select('*');
        $this->db->from('complaint_category');
        return $this->db->count_all_results();
    }
    
    public function get_enquiry_category_count()
    {
        $this->db->select('*');
        $this->db->from('enquiry_category');
        return $this->db->count_all_results();
    }
}