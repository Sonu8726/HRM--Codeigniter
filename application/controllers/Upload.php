<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
    }

    function index() {
        $this->load->view('Admin/addEmployee');
    }

    public function do_upload() {
        $config['upload_path'] = "./upload";
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file")) {
            $data = array('upload_data' => $this->upload->data());
            $data1 = array(
                'menu_id' => $this->input->post('selectmenuid'),
                'submenu_id' => $this->input->post('selectsubmenu'),
                'imagetitle' => $this->input->post('imagetitle'),
                'imgpath' => $data['upload_data']['file_name']
            );
            $result = $this->Admin_model->save_imagepath($data1);
            if ($result == TRUE) {
                echo "true";
            }
        }
    }

}
