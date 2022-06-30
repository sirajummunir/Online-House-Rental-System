<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model');
    }

    public function index() {
        $this->load->view('home');
    }
    public function owner_reg() {
        $this->load->view('owner_reg');
    }
    public function renter_reg() {
        $this->load->view('renter_reg');
    }
    public function owner_regi() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['occupation'] = $this->input->post('occupation', true);
        $data['position'] = $this->input->post('position', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['nationality'] = $this->input->post('nationality', true);
        $data['nid'] = $this->input->post('nid', true);
        $data['password'] = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
        $data['house_name'] = $this->input->post('house_name', true);
        $data['house_no'] = $this->input->post('house_no', true);
        $data['road_no'] = $this->input->post('road_no', true);
        $data['block'] = $this->input->post('block', true);
        $data['area_name'] = $this->input->post('area_name', true);
        $data['city'] = $this->input->post('city', true);
        $data['email'] = $this->input->post('email', true);
        $data['mobile'] = $this->input->post('mobile', true);

        $this->welcome_model->owner_regi($data);

        $sdata = array();
        $sdata['save_messages'] = 'Owner Registration Succesfully Complete...';
        $this->session->set_userdata($sdata);
        redirect(base_url());
    }
    public function renter_regi() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['occupation'] = $this->input->post('occupation', true);
        $data['position'] = $this->input->post('position', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['religion'] = $this->input->post('religion', true);
        $data['nationality'] = $this->input->post('nationality', true);
        $data['nid'] = $this->input->post('nid', true);
        $data['password'] = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
        $data['p_address'] = $this->input->post('p_address', true);
        $data['city'] = $this->input->post('city', true);
        $data['email'] = $this->input->post('email', true);
        $data['mobile'] = $this->input->post('mobile', true);

        $this->welcome_model->renter_regi($data);

        $sdata = array();
        $sdata['save_messages'] = 'Renter Registration Succesfully Complete...';
        $this->session->set_userdata($sdata);
        redirect(base_url());
    }
    public function login() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        if($this->input->post('owner')=="owner"){
            $result = $this->welcome_model->login_info($email);
//        echo '<pre>';
//        print_r($result);
//        exit();
            if (password_verify($password, $result->password)) {
                $sdata = array();
                $sdata['owner_id'] = $result->owner_id;
                $sdata['block_account'] = $result->block_account;
                $this->session->set_userdata($sdata);
                redirect("welcome/owner", 'refresh');
            } 
            else {
                $sdata['save_messages'] = 'Please Enter valid Email & Password.';
                $this->session->set_userdata($sdata);
                redirect(base_url());
            }
        }
        else if($this->input->post('renter')=="renter"){
            $result = $this->welcome_model->login_info2($email);
            if (password_verify($password, $result->password)) {
                $sdata = array();
                $sdata['renter_id'] = $result->renter_id;
                $sdata['block'] = $result->block;
                $this->session->set_userdata($sdata);
                redirect("welcome/renter", 'refresh');
            } 
            else {
                $sdata['save_messages'] = 'Please Enter valid Email & Password.';
                $this->session->set_userdata($sdata);
                redirect(base_url());
            }
        }
        else {
            $result = $this->welcome_model->login_info3($email);
            if (password_verify($password, $result->password)) {
                $sdata = array();
                $sdata['admin_id'] = $result->admin_id;
                $this->session->set_userdata($sdata);
                redirect("welcome/admin", 'refresh');
            } 
            else {
                $sdata['save_messages'] = 'Please Enter valid Email & Password.';
                $this->session->set_userdata($sdata);
                redirect(base_url());
            }
        }
    }
    public function owner() {
        $data = array();
        $data['ads'] = $this->welcome_model->ads_info();
        $this->load->view('owner', $data);
    }
    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect(base_url(), 'refresh');
    }
    public function post_ad() {
        $this->load->view('post_ad');
    }
    public function ad() {
        $data = array();
        $data['owner_id'] = $this->input->post('owner_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['category'] = $this->input->post('category', true);
        $data['month'] = $this->input->post('month', true);
        $data['bedroom'] = $this->input->post('bedroom', true);
        $data['balcony'] = $this->input->post('balcony', true);
        $data['kitchen'] = $this->input->post('kitchen', true);
        $data['washroom'] = $this->input->post('washroom', true);
        $data['active'] = $this->input->post('active', true);
        $data['details'] = $this->input->post('details', true);
        if ($_FILES['image']['size'] <= 10000000) {
            $result = $this->image_upload('image');
            if ($result['upload_data']) {
                $data['image'] = 'resource/images/' . $result['upload_data']['file_name'];
            }
        } else {
            
        }
        $this->welcome_model->ad($data);
        redirect("welcome/owner");
    }
    function image_upload($image_file) {
        $config['upload_path'] = './resource/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000000;
        $config['max_width'] = 10000000;
        $config['max_height'] = 768000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($image_file)) {
            $error = array('error' => $this->upload->display_errors(), 'upload_data' => '');
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data(), 'error' => '');
            return $data;
        }
    }
    public function my_ad() {
        $data = array();
        $data['myads'] = $this->welcome_model->myads_info();
        $this->load->view('my_ad', $data);
    }
    public function renter() {
        $data = array();
        $data['ads'] = $this->welcome_model->ads_info();
        $this->load->view('renter', $data);
    }
    public function send_req($id) {
        $data = array();
        $data['ad'] = $this->welcome_model->ad_info($id);
        $this->load->view('send_req', $data);
    }
    public function send() {
        $data = array();
        $data['ad_id'] = $this->input->post('ad_id', true);
        $data['renter_id'] = $this->input->post('renter_id', true);
        $data['visiting_date'] = $this->input->post('visiting_date', true);
        $data['visiting_time'] = $this->input->post('visiting_time', true);

        $this->welcome_model->send($data);

        $sdata = array();
        $sdata['save_messages'] = 'Visiting Request Succesfully Send...';
        $this->session->set_userdata($sdata);
        redirect("welcome/renter");
    }
    public function owner_req() {
        $data = array();
        $data['owner_req'] = $this->welcome_model->owner_req();
        $this->load->view('owner_req', $data);
    }
    public function confirmation($id) {
        $data = array();
        $data['ad_id'] = $id;
        $data['active'] = 0;
        $this->welcome_model->confirmation($data);
        redirect("welcome/my_ad");
    }
    public function renter_req() {
        $data = array();
        $data['renter_req'] = $this->welcome_model->renter_req();
        $this->load->view('renter_req', $data);
    }
    public function admin() {
        $data = array();
        $data['ads'] = $this->welcome_model->ads_info();
        $this->load->view('admin', $data);
    }
    public function pending_post() {
        $data = array();
        $data['pending'] = $this->welcome_model->pending();
        $this->load->view('pending_post', $data);
    }
    public function approve($id) {
        $data = array();
        $data['ad_id'] = $id;
        $data['pending'] = 1;
        $this->welcome_model->approve($data);
        redirect("welcome/pending_post");
    }
    public function report_renter($id) {
        $data['renter'] = $id;
        $this->load->view('report_renter', $data);
    }
    public function report_send() {
        $data = array();
        $data['owner_id'] = $this->input->post('owner_id', true);
        $data['renter_id'] = $this->input->post('renter_id', true);
        $data['reason'] = $this->input->post('reason', true);

        $this->welcome_model->report_send($data);

        $sdata = array();
        $sdata['save_messages'] = 'Report Succesfully Send...';
        $this->session->set_userdata($sdata);
        redirect("welcome/owner");
    }
    public function renter_report() {
        $data = array();
        $data['renter_report'] = $this->welcome_model->renter_report();
        $data['renter_report2'] = $this->welcome_model->renter_report2();
        $this->load->view('renter_report', $data);
    }
    public function block($id) {
        $data = array();
        $data['renter_id'] = $id;
        $data['block'] = 1;
        $this->welcome_model->block($data);
        redirect("welcome/renter_report");
    }
    public function unblock($id) {
        $data = array();
        $data['renter_id'] = $id;
        $data['block'] = 0;
        $this->welcome_model->block($data);
        redirect("welcome/renter_report");
    }
    public function report_owner($id) {
        $data['owner'] = $id;
        $this->load->view('report_owner', $data);
    }
    public function owner_report_send() {
        $data = array();
        $data['owner_id'] = $this->input->post('owner_id', true);
        $data['renter_id'] = $this->input->post('renter_id', true);
        $data['reason'] = $this->input->post('reason', true);

        $this->welcome_model->owner_report_send($data);

        $sdata = array();
        $sdata['save_messages'] = 'Report Succesfully Send...';
        $this->session->set_userdata($sdata);
        redirect("welcome/renter");
    }
    public function owner_report() {
        $data = array();
        $data['owner_report'] = $this->welcome_model->owner_report();
        $data['owner_report2'] = $this->welcome_model->owner_report2();
        $this->load->view('owner_report', $data);
    }
    public function block_owner($id) {
        $data = array();
        $data['owner_id'] = $id;
        $data['block_account'] = 1;
        $this->welcome_model->block_owner($data);
        redirect("welcome/owner_report");
    }
    public function unblock_owner($id) {
        $data = array();
        $data['owner_id'] = $id;
        $data['block_account'] = 0;
        $this->welcome_model->block_owner($data);
        redirect("welcome/owner_report");
    }
}
