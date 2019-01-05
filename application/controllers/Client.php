<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Client extends My_Controller {

    function __construct() {

        parent::__construct();

        $session_id = $this->session->userdata('id');

        if ($session_id == NULL) {
            return redirect('Login/index');
        }
    }

    public function assign_client()
    {
        $guard = $this->input->post('guard');
        $client = $this->input->post('client');
        
        $data = array(
            'guard' => $guard,
            'client' => $client
        );
        
    }
}
