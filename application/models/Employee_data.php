<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employee_data extends CI_Model {

    public function addEmployees($s) {
        $data = $this->db->insert('guards_details', $s);
        if ($data) {
            $this->session->set_flashdata('Success', 'Data Stored successfully');
        }
    }

    public function updateEmployees($uid, $data) {
        $sid = $this->session->userdata('id');
        $pid = $this->session->userdata('project_id');
        if($uid!=NULL && $data !=NULL ){
        $this->db->where(['id' => $uid, 'user_id' => $sid, 'project_id' => $pid]);
        $this->db->update('guards_details', $data);
        }
    }

    public function viewEmployee($s) {
        $sid = $this->session->userdata('id');
        $pid = $this->session->userdata('project_id');
        $data = $this->db->select('*')
                ->from('guards_details')
                ->where(['id' => $s, 'user_id' => $sid, 'project_id' => $pid])
                ->get();

        if ($data->num_rows()) {
            $this->session->set_flashdata('guard_detail', 'Data Retrived successfully');
            return $data->result();
        }
    }

}
