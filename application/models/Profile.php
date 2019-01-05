<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Profile extends CI_Model {

    public function listdata() {
        $id = $this->session->userdata('id');
        $data = $this->db->select('*')
                ->from('user')
                ->where(['id' => $id])
                ->get();
        if ($data->num_rows()) {
            return $data->row();
        } else {
            return "No Data";
        }
    }

    public function changePasswordx($x) {
        $id = $this->session->userdata('id');
        $xc = md5($x);
        $this->db->set('password', $xc); //value that used to update column  
        $this->db->where('id', $id); //which row want to upgrade  
        $this->db->update('user');
    }

}
