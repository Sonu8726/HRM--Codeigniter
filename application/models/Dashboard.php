<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends CI_Model {

    public function fetchstoreData() {
        $id = $this->session->userdata('project_id');
        $data = $this->db->select('*')
                ->from('project')
                ->where(['project_id' => $id])
                ->get();
        if ($data->num_rows()) {
            return $data->row();
        } else {
            return "No Data";
        }
    }
}

