<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends My_Controller {

    function __construct() {

        parent::__construct();
        $this->session->unset_userdata('id');
        
    }

    public function index() {
        if($this->session->userdata('id') && $this->session->userdata('project_id') != NULL)
        {
             $this->load->view('Admin/index');
        }
 else {$this->load->view('index');}
    }

    public function login_check() {
        $this->form_validation->set_rules('username', 'Username:', 'required|trim');
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong>Error!</strong>Required Username and Password.!</div>');
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->load->model('Login_user');
            $session_id = $this->Login_user->login_check($username, $password);
            if ($session_id) {
                $this->session->set_userdata('id', $session_id->id);
                $this->session->set_userdata('project_id', $session_id->project_id);
                $this->session->set_flashdata('Login', 'User loging sucessfull. ');
                return redirect('Admin/index');
            } else {
                $this->session->set_flashdata('LoginFailed', 'Invalid Username / Password');
                return redirect('Login/index');
            }
        } else {

            $this->load->view('index');
        }
    }

    public function logout() {
        $this->session->set_flashdata('Logout', 'User logout sucessfully ');
        $this->session->unset_userdata('id');
        return redirect('Login/index');
    }

}
