<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Employee extends My_Controller {
    function __construct() {

        parent::__construct();

        $session_id = $this->session->userdata('id');

        if ($session_id == NULL) {
            return redirect('Login/index');
        }
    }

    public function deleteEmployee($id) {
        $this->db->where('id', $id);
        $this->db->delete('guards_details');
        $this->session->set_flashdata('Delete', 'Data Deleted Successfully');
        redirect(base_url('Admin/listEmployee'));
    }

    public function viewEmployee($vid) {
        if (!empty($vid)) {
            $this->load->model('Profile');
            $this->load->model('Dashboard');
            $this->load->model('Employee_data');
            $datax = $this->Profile->listData();
            $store = $this->Dashboard->fetchstoreData();
            $view = $this->Employee_data->viewEmployee($vid);
            $this->load->view('Admin/view_employee', ['datax' => $datax, 'store' => $store, 'view' => $view]);
        } else {
            redirect(base_url('Admin/listEmployee'));
        }
    }

    public function addEmployee() {

        date_default_timezone_set('Asia/Kathmandu');
        $name = $this->input->post('name');
        $mobileno = $this->input->post('mobileno');
        $alternate = $this->input->post('alternatemobileno');
        $present_address = $this->input->post('present_address');
        $permanent_address = $this->input->post('permanent_address');
        $adhar = $this->input->post('adharcard');
        $guard_type = $this->input->post('guard_type');
        $skill_set = $this->input->post('skill_set');
        $gender = $this->input->post('gender');
        $salary_id = "VSG-" . date('dmY') . rand(10, 1900);
        $id = $this->session->userdata('id');
        $projectid = $this->session->userdata('project_id');
        $dateofjoin = date('Y-m-d');

        $data = array(
            'salary_id' => $salary_id,
            'guard_type' => $guard_type,
            'skill_set' => $skill_set,
            'guard_name' => $name,
            'guard_number' => $mobileno,
            'alternate_number' => $alternate,
            'adhar_card' => $adhar,
            'gender' => $gender,
            'present_address' => $present_address,
            'permanent_address' => $permanent_address,
            'date_of_joining' => $dateofjoin,
            'user_id' => $id,
            'project_id' => $projectid
        );
        $this->load->model('Employee_data');
        $this->Employee_data->addEmployees($data);
        redirect('Admin/listEmployee');
    }
    
     public function updateEmployee($kid) {

        date_default_timezone_set('Asia/Kathmandu');
        $name = $this->input->post('name');
        $mobileno = $this->input->post('mobileno');
        $alternate = $this->input->post('alternatemobileno');
        $present_address = $this->input->post('present_address');
        $permanent_address = $this->input->post('permanent_address');
        $adhar = $this->input->post('adharcard');
        $guard_type = $this->input->post('guard_type');
        $skill_set = $this->input->post('skill_set');
        $gender = $this->input->post('gender');
        $salary_id = "VSG-" . date('dmY') . rand(10, 1900);
        $id = $this->session->userdata('id');
        $projectid = $this->session->userdata('project_id');
        $update_date = date('Y-m-d');

        $data = array(
            'salary_id' => $salary_id,
            'guard_type' => $guard_type,
            'skill_set' => $skill_set,
            'guard_name' => $name,
            'guard_number' => $mobileno,
            'alternate_number' => $alternate,
            'adhar_card' => $adhar,
            'gender' => $gender,
            'present_address' => $present_address,
            'permanent_address' => $permanent_address,
            'update_date' => $update_date,
            'user_id' => $id,
            'project_id' => $projectid
        );
        $this->load->model('Employee_data');
        $this->Employee_data->updateEmployees($kid,$data);
        redirect('Admin/listEmployee');
    }

}
