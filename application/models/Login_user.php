<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login_user extends CI_Model {

    public function login_check($uname, $pass) {
        $q = $this->db->where(['username' => $uname, 'password' => $pass])
                  ->get('user');
        
        if ($q->num_rows()==1) {
            return $q->row();
        } else {
            echo 'fail';
        }
    }

}
