<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontoffice_Model extends CI_Model {
    public function insert_contact($enquiry)
    {
        $query = $this->db->insert('enquiry',$enquiry);
        return $query;
    }
    
    public function get_enquiry()
    {
        $query = $this->db->get('enquiry');
        return $query->result();
    }

    public function get_complaint()
    {
        $query = $this->db->get('complaint');
        return $query->result();
    }

    public function get_enquiry_cat()
    {
        $query = $this->db->get('enquiry_category');
        return $query->result();
    }

    public function get_enquiry_cat_by_id($id)
    {
        $this->db->where('enquiry_cat_id',$id);
        $query = $this->db->get('enquiry_category');
        return $query->result();
    }

    public function get_complaint_cat_by_id($id)
    {
        $this->db->where('complaint_cat_id',$id);
        $query = $this->db->get('complaint_category');
        return $query->result();
    }

    public function update_enquiry_type($id,$enquiry_type)
    {
        $this->db->where('enquiry_cat_id',$id);
        $query = $this->db->update('enquiry_category',$enquiry_type);
        return $query;
    }

    public function update_complaint_type($id,$complaint_type)
    {
        $this->db->where('complaint_cat_id',$id);
        $query = $this->db->update('complaint_category',$complaint_type);
        return $query;
    }

    public function check_enquiry_type_by_type($enquiry_type)
    {
        $this->db->where('enquiry_type',$enquiry_type);
        $query = $this->db->get('enquiry_category');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function check_complaint_type_by_type($complaint_type)
    {
        $this->db->where('complaint_type',$complaint_type);
        $query = $this->db->get('complaint_category');
        if(!empty($query->result_array()))
        return 1;
    }

    public function get_enquiry_details()
    {
        $this->db->select('*');
        $this->db->from('enquiry');
        $this->db->join('enquiry_category','enquiry_category.enquiry_cat_id=enquiry.enquiry_type');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_complaint_details()
    {
        $this->db->select('*');
        $this->db->from('complaint');
        $this->db->join('admission','admission.online_admission_id=complaint.student_id','left');
        $this->db->join('departments','departments.department_id=complaint.dept_id','left');
        $this->db->join('complaint_category','complaint_category.complaint_cat_id=complaint.complaint_subject','left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_public_complaint_details()
    {
        $this->db->select('*');
        $this->db->from('complaint_public');
        $this->db->where('session_status',1);
        $this->db->join('session','session.session_id=complaint_public.complaint_public_session','left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_complaint_cat()
    {
        $query = $this->db->get('complaint_category');
        return $query->result();
    }

    public function check_enquiry_type($enquiry_type)
    {
        $this->db->where('enquiry_type',$enquiry_type);
        $query = $this->db->get('enquiry_category');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function insert_enquiry_type($enquiry_type)
    {
        $query = $this->db->insert('enquiry_category',$enquiry_type);
        return $query;
    }

    public function check_complaint_type($complaint_type)
    {
        $this->db->where('complaint_type',$complaint_type);
        $query = $this->db->get('complaint_category');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function insert_complaint_type($complaint_type)
    {
        $query = $this->db->insert('complaint_category',$complaint_type);
        return $query;
    }

    public function delete_complaint_type($id)
    {
        $this->db->where('complaint_cat_id',$id);
        $query = $this->db->delete('complaint_category');
        return $query;
    }

    public function delete_enquiry_type($id)
    {
        $this->db->where('enquiry_type',$id);
        $this->db->delete('enquiry');
        $this->db->where('enquiry_cat_id',$id);
        $query = $this->db->delete('enquiry_category');
        return $query;
    }
}