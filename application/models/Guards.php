<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guards extends CI_Model {
public function fetchData() {
        $id = $this->session->userdata('id');
        $data = $this->db->select('*')
                ->from('guards_details')
                ->where(['user_id'=>$id])
                ->get();
        
        if ($data->num_rows()) {
            return $data->result();
        } else {
            return "No Data";
        }
    }

}
