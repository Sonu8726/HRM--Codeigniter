<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends My_Controller {

    function __construct() {

        parent::__construct();

        $session_id = $this->session->userdata('id');

        if ($session_id == NULL) {
            return redirect('Login/index');
        }
        
    }

    public function index() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        
        $this->load->view('Admin/index', ['datax' => $datax, 'store' => $store]);
    }
    
    public function profile() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/profile', ['datax' => $datax, 'store' => $store]);
    }

    public function company_config() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();     
        $this->load->view('Admin/company_config', ['datax' => $datax, 'store' => $storess]);
    }

    //change password ----View
    public function change_password() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
       
        $this->load->view('Admin/change_password', ['datax' => $datax, 'store' => $store]);
    }
    //Change password operation controller
    public function changePassword() {
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');
        if($password1==$password2)
        {
           $this->load->model('Profile');
           $this->Profile->changePasswordx($password1); 
           $this->session->set_flashdata('password', 'Password Change Successfully');
           redirect('Admin/change_password');           
        }
        else{
           $this->session->set_flashdata('passwordfail', 'Error !!! Password Not Changed'); 
           redirect('Admin/change_password');
        }      
    }

    public function profile_data() {
        $this->form_validation->set_rules('username', 'Username:', 'required|trim|unique');
        if ($this->form_validation->run()) {
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $cdate = time('Y-m-d');
            $this->load->model('Profile');
            $this->Profile->updateData($name, $username, $email, $cdate);
            $this->load->view('Admin/profile', ['datax' => $datax, 'store' => $store]);
        }
    }

    public function updatedPassword() {

        $password = MD5($this->input->post('password'));
        $this->load->model('Profile');
        $result = $this->Profile->updatePassword($password);
        $this->load->view('Admin/change_password', ['result' => $result]);
    }

    //load client pages
    public function listClient() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $this->load->model('Client');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $client = $this->Client->fetchData();
        $this->load->view('Admin/list_client', ['datax' => $datax, 'store' => $store, 'client'=>$client]);
    }

    public function addClient() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $this->load->model('Client');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $client = $this->Client->fetchData();
        $this->load->view('Admin/add_client', ['datax' => $datax, 'store' => $store, 'client'=>$client]);
    }

    public function manageClient() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/manage_client', ['datax' => $datax, 'store' => $store]);
    }

    public function clientReport() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/client_report', ['datax' => $datax, 'store' => $store]);
    }

    public function assignManpower() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $this->load->model('Guards');
        $this->load->model('Client');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $guard = $this->Guards->fetchData();
        $client = $this->Client->fetchData();
        $this->load->view('Admin/assign_manpower', ['datax' => $datax, 'store' => $store, 'guard' => $guard, 'client'=>$client]);
    }

    //load client pages
    public function listEmployee() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $this->load->model('Guards');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $guard = $this->Guards->fetchData();
        $this->load->view('Admin/list_employee', ['datax' => $datax, 'store' => $store, 'guard' => $guard]);
    }

    public function addEmployee() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $this->load->model('Client');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $client = $this->Client->fetchData();
        $this->load->view('Admin/add_employee', ['datax' => $datax, 'store' => $store, 'client'=>$client]);
    }

    public function manageEmployee($kid) {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $this->load->model('Employee_data');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $manage = $this->Employee_data->viewEmployee($kid);
        $this->load->view('Admin/manage_employee', ['datax' => $datax, 'store' => $store, 'manage' => $manage]);
    }

    public function employeeReport() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/employee_report', ['datax' => $datax, 'store' => $store]);
    }

    public function salary() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/salary', ['datax' => $datax, 'store' => $store]);
    }

    //Invoice Report
    public function gstInvoice() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/gstinvoice', ['datax' => $datax, 'store' => $store]);
    }

    public function nonGstInvoice() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/nongstinvoice', ['datax' => $datax, 'store' => $store]);
    }

    public function invoiceReport() {
        $this->load->model('Profile');
        $this->load->model('Dashboard');
        $datax = $this->Profile->listData();
        $store = $this->Dashboard->fetchstoreData();
        $this->load->view('Admin/invoice_report', ['datax' => $datax, 'store' => $store]);
    }

}
