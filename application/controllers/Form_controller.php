<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('General_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('welcome_message');
        $this->load->view('footer');
    }

    public function form_action() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('welcome_message');
            $this->load->view('footer');
        } else {

            $data['name'] = $this->input->post('name');
            $data['age'] = $this->input->post('age');
            $data['gender'] = $this->input->post('gender');
            $data['email'] = $this->input->post('email');
            $data['pass_word'] = $this->input->post('password');

            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                exit;
            } else {
                $data2 = array('upload_data' => $this->upload->data());
                $data['image'] = $data2['upload_data']['file_name'];
            }

            $is_insert = $this->General_model->insert('user_info', $data);

            if ($is_insert) {
                $this->load->view('header');
                $this->load->view('form_action');
                $this->load->view('footer');
            }
        }
    }

    public function view_data() {
        $data['user_info'] = $this->General_model->getTableData('user_info');
        $this->load->view('header', $data);
        $this->load->view('view_data');
        $this->load->view('footer');
    }

    public function update_view_data($id) {
        $data['user_info'] = $this->General_model->getEditData('user_info', $id);
        $this->load->view('header', $data);
        $this->load->view('update_view_data');
        $this->load->view('footer');
    }

    public function update_form_action() {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user_info'] = $this->General_model->getEditData('user_info', $id);
            $this->load->view('header', $data);
            $this->load->view('update_view_data');
            $this->load->view('footer');
        } else {

            $data['name'] = $this->input->post('name');
            $data['age'] = $this->input->post('age');
            $data['gender'] = $this->input->post('gender');
            $data['email'] = $this->input->post('email');
            $data['pass_word'] = $this->input->post('password');

            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                exit;
            } else {
                $data2 = array('upload_data' => $this->upload->data());
                $data['image'] = $data2['upload_data']['file_name'];
            }

            $is_insert = $this->General_model->updateTableData('user_info','id',$id,$data);

            if ($is_insert) {
                $this->load->view('header');
                $this->load->view('form_action');
                $this->load->view('footer');
            }
        }
    }
    
    public function delete_data($id){
        $data['user_info'] = $this->General_model->deleteData('user_info', $id);
        $this->load->view('header', $data);
        $this->load->view('view_data');
        $this->load->view('footer');
    }

}
