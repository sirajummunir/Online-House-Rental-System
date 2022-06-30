<?php

class Welcome_model extends CI_Model {
    public function owner_regi($data) {
        $this->db->insert('owner', $data);
    }
    public function renter_regi($data) {
        $this->db->insert('renter', $data);
    }
    public function login_info($email) {
        $this->db->select('*');
        $this->db->from('owner');
        $this->db->where('email', $email);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
        
    }
    public function login_info2($email) {
        $this->db->select('*');
        $this->db->from('renter');
        $this->db->where('email', $email);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function login_info3($email) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function ad($data) {
        $this->db->insert('advertisement', $data);
    }
    public function ads_info() {
        $this->db->select('*');
        $this->db->from('advertisement');
        $this->db->where('active', 1);
        $this->db->where('pending', 1);
        $this->db->join('owner','owner.owner_id=advertisement.owner_id');
        $this->db->order_by('ad_id',"desc");
        $this->db->limit(120);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function ad_info($id) {
        $this->db->select('*');
        $this->db->from('advertisement');
        $this->db->where('ad_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function myads_info() {
        $this->db->select('*');
        $this->db->from('advertisement');
        $this->db->order_by('ad_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function send($data) {
        $this->db->insert('request', $data);
    }
    public function owner_req() {
        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('active', 1);
        $this->db->join('renter','renter.renter_id=request.renter_id');
        $this->db->join('advertisement','advertisement.ad_id=request.ad_id');
        $this->db->order_by('req_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function confirmation($data) {
        $this->db->where('ad_id', $data['ad_id']);
        $this->db->update('advertisement', $data);
    }
    public function renter_req() {
        $this->db->select('*');
        $this->db->from('request');
        $this->db->join('advertisement','advertisement.ad_id=request.ad_id');
        $this->db->order_by('req_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function pending() {
        $this->db->select('*');
        $this->db->from('advertisement');
        $this->db->join('owner','owner.owner_id=advertisement.owner_id');
        $this->db->order_by('ad_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function approve($data) {
        $this->db->where('ad_id', $data['ad_id']);
        $this->db->update('advertisement', $data);
    }
    public function report_send($data) {
        $this->db->insert('report', $data);
    }
    public function renter_report() {
        $this->db->select('*');
        $this->db->from('report');
        $this->db->join('renter','renter.renter_id=report.renter_id');
        $this->db->order_by('report_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function renter_report2() {
        $this->db->select('*');
        $this->db->from('report');
        $this->db->join('owner','owner.owner_id=report.owner_id');
        $this->db->order_by('report_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function block($data) {
        $this->db->where('renter_id', $data['renter_id']);
        $this->db->update('renter', $data);
    }
    public function owner_report_send($data) {
        $this->db->insert('owner_report', $data);
    }
    public function owner_report() {
        $this->db->select('*');
        $this->db->from('owner_report');
        $this->db->join('owner','owner.owner_id=owner_report.owner_id');
        $this->db->order_by('report_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function owner_report2() {
        $this->db->select('*');
        $this->db->from('owner_report');
        $this->db->join('renter','renter.renter_id=owner_report.renter_id');
        $this->db->order_by('report_id',"desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function block_owner($data) {
        $this->db->where('owner_id', $data['owner_id']);
        $this->db->update('owner', $data);
    }
}