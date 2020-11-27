<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Daily extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_post()
    {
        $post = $this->input->post();
        $data = array(
            'tgl_daily' => $post['tgl_daily'],
            'pokok_bahasan' => $post['pokok_bahasan'],
            'sub_pokok' => $post['sub_pokok'],
            'kegiatan' => $post['kegiatan'],
            'status' => "Belum Dicek",
            'NIM' => $post['NIM'],
        );
        $q = $this->db->insert('tbl_daily', $data);
        if ($q) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function cek_post()
    {
        $post = $this->input->post();
        // $this->db->join('tbl_catatan', 'tbl_daily.id_daily=tbl_catatan.id_daily');
        $this->db->where('NIM', $post['NIM']);
        $q = $this->db->get('tbl_daily')->result();
        if ($q) {
            $this->response(array("result" => $q, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function cek2_post()
    {
        $post = $this->input->post();
        $this->db->join('tbl_catatan', 'tbl_daily.id_daily=tbl_catatan.id_daily');
        $this->db->where('NIM', $post['NIM']);
        $q = $this->db->get('tbl_daily')->result();
        if ($q) {
            $this->response(array("result" => $q, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


    function cek_daily_post()
    {
        $post = $this->input->post();
        $this->db->where('tgl_daily', $post['tgl_daily']);
        $this->db->where('NIM', $post['NIM']);
        $q = $this->db->get('tbl_daily')->row_array();
        if ($q) {
            $u['NIM'] = $q['NIM'];
            $this->response($u, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
