<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pendamping extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $id = $this->get('id_pendamping');
        if ($id == '') {
            $kontak = $this->db->get('tbl_pembimbing')->result();
        } else {
            $this->db->where('id_pendamping', $id);
            $kontak = $this->db->get('tbl_pembimbing')->result();
        }
        $this->response(array("result" => $kontak, 200));
    }
    function index_post()
    {
        $post = $this->input->post();
        $data = array(
            'nama_pendamping' => $post['nama_pendamping'],
            'no_hp' => $post['no_hp'],
            'username' => $post['username'],
            'password' => $post['password'],
            'token' => $post['token']
        );
        $q = $this->db->insert('tbl_pembimbing', $data);
        if ($q) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function login_post()
    {
        $post = $this->input->post();
        $username = $post['username'];
        $password = $post['password'];

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $data = $this->db->get('tbl_pembimbing')->row_array();

        if ($data) {
            $output['id_pendamping'] = $data['id_pendamping'];
            $output['nama_pendamping'] = $data['nama_pendamping'];
            $output['no_hp'] = $data['no_hp'];
            $output['password'] = $data['password'];
            $output['username'] = $data['username'];
            $output['token'] = $data['token'];
            $this->response($output, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function pengajuan_post()
    {
        $post = $this->input->post();
        $this->db->join('tbl_mahasiswa', 'tbl_mahasiswa.NIM=tbl_pengajuan.NIM');
        $this->db->where('status', 'Mendaftar');
        $this->db->where('id_pendamping', $post['id_pendamping']);
        $q = $this->db->get('tbl_pengajuan')->result();
        $this->response(array("result" => $q, 200));
    }

    function mahasiswa_post()
    {
        $post = $this->input->post();
        $this->db->join('tbl_mahasiswa', 'tbl_mahasiswa.NIM=tbl_pengajuan.NIM');
        $this->db->where('status', 'Diterima');
        $this->db->where('id_pendamping', $post['id_pendamping']);
        $q = $this->db->get('tbl_pengajuan')->result();
        if ($q) {
            $this->response(array("result" => $q, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


    function konfirmasi_post()
    {
        $post = $this->input->post();
        $id_daily = $post['id_daily'];


        $data = array(
            'id_daily' => $post['id_daily'],
            'catatan' => $post['catatan'],
            'img' => $post['img']
        );
        $q = $this->db->insert('tbl_catatan', $data);
        if ($q) {
            $this->db->set('status', 'Telah Dikonfirmasi');
            $this->db->where('id_daily', $id_daily);
            $this->db->update('tbl_daily');
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function profil_put()
    {
        $put = $this->put();
        $id = $this->put('id_pendamping');
        $data = array(
            'id_pendamping' => $put['id_pendamping'],
            'nama_pendamping' => $put['nama_pendamping'],
            'no_hp' => $put['no_hp'],
            'username' => $put['username'],
            'password' => $put['password'],
            'token' => $put['token']
        );
        $this->db->where('id_pendamping', $id);
        $update = $this->db->update('tbl_pembimbing', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
