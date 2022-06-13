<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students_Model extends CI_Model {
    public function check_student_category($student_category)
    {
        $this->db->where('student_cat_name', $student_category);
        $query = $this->db->get('student_category');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function add_student_category($student_category)
    {
        $query = $this->db->insert('student_category',$student_category);
        return $query;
    }

    public function get_student_category()
    {
        $query = $this->db->get('student_category');
        return $query->result();
    }

    public function get_student_category_by_id($id)
    {
        $this->db->where('student_cat_id',$id);
        $query = $this->db->get('student_category');
        return $query->result();
    }
    
    public function get_student_by_email($email)
    {
        $this->db->where('candidate_email',$email);
        $query = $this->db->get('admission');
        return $query->row();
    }

    public function update_student_category($id,$student_category)
    {
        $this->db->where('student_cat_id',$id);
        $query = $this->db->update('student_category',$student_category);
        return $query;
    }

    public function delete_student_category($id)
    {
        $this->db->where('student_cat_id',$id);
        $query = $this->db->delete('student_category');
        return $query;
    }

    public function add_admission($admission)
    {
        $query = $this->db->insert('admission',$admission);
        return $query;
    }

    public function get_student_details_result()
    {
        $query = $this->db->get('admission');
        return $query->result();
    }

    public function get_student_details()
    {
        $data = array(
            'admission_status' => 1,
            'admission_confirm' => 1,
            'application_rejection_reason' => NULL
            );
        $this->db->select('*');
        $this->db->from('admission');
        $this->db->where($data);
        $this->db->join('student_category','student_category.student_cat_id=admission.caste','left');
        $this->db->join('departments','departments.department_id=admission.department','left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_student_details_by_id($admission_id)
    {
        $this->db->select('*');
        $this->db->from('admission');
        $this->db->where('online_admission_id',$admission_id);
        $this->db->join('student_category','student_category.student_cat_id=admission.caste','left');
        $this->db->join('departments','departments.department_id=admission.department','left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_student_details_by_id_by_row($admission_id)
    {
        $this->db->where('online_admission_id',$admission_id);
        $query = $this->db->get('admission');
        return $query->row();
    }

    public function approve_online_admission($admission_id,$admission_status)
    {
        $this->db->where('online_admission_id',$admission_id);
        $query = $this->db->update('admission',$admission_status);
        return $query;
    }

    public function confirm_online_admission($admission_id,$admission_confirm)
    {
        $this->db->where('online_admission_id',$admission_id);
        $query = $this->db->update('admission',$admission_confirm);
        return $query;
    }
    
    public function update_rejection_reason($email,$status)
    {
        $this->db->where('candidate_email',$email);
        $query = $this->db->update('admission',$status);
        return $query;
    }
    
    public function get_rejected_application()
    {
        $data = array(
            'admission_status' => 2,
            'admission_confirm' => 2,
            );
        $this->db->where($data);
        $query = $this->db->get('admission');
        return $query->result();
    }
}