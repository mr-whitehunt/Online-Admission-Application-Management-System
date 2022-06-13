<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_Model extends CI_Model {

    public function check_department($department_name)
    {
        $this->db->where('department_name',$department_name);
        $query = $this->db->get('departments');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function add_department($department)
    {
        $query = $this->db->insert('departments',$department);
        return $query;
    }

    public function get_departments()
    {
        $results = array();
        $query = $this->db->get('departments');
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function get_department_by_id($id)
    {
        $this->db->where('department_id',$id);
        $query = $this->db->get('departments');
        return $query->result();
    }

    public function update_department($id,$department_name)
    {
        $this->db->where('department_id',$id);
        $query = $this->db->update('departments',$department_name);
        return $query;
    }

    public function delete_department($id)
    {
        $this->db->where('department_id',$id);
        $query = $this->db->delete('departments');
        return $query;
    }

    public function check_semester($semester)
    {
        $this->db->where($semester);
        $query = $this->db->get('semesters');
        if(!empty($query->result_array()))
        {
            return 1;
        }
    }

    public function add_semester($semester)
    {
        $query = $this->db->insert('semesters',$semester);
        return $query;
    }

    public function get_semesters()
    {
        $query = $this->db->get('semesters');
        return $query->result();
    }

    public function get_semester_by_id($id)
    {
        $this->db->where('semester_id',$id);
        $query = $this->db->get('semesters');
        return $query->result();
    }

    public function update_semester($id,$semester)
    {
        $this->db->where('semester_id',$id);
        $query = $this->db->update('semesters',$semester);
        return $query;
    }

    public function delete_semester($id)
    {
        $this->db->where('semester_id',$id);
        $query = $this->db->delete('semesters');
        return $query;
    }
}