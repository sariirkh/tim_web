<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class User extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get()
    {
        $id = $this->get('id_akun');
        if ($id == '') {
            $kontak = $this->db->get('tbl_akun')->result();
        } else {
            $this->db->where('id_akun', $id);
            $kontak = $this->db->get('tbl_akun')->result();
        }
        $this->response(array("result" => $kontak, 200));
    }


    //Mengirim atau menambah data user baru
    function index_post()
    {
        $data = array(
            'username'           => $this->post('username'),
            'password'           => $this->post('password'),
            'token'           => $this->post('token')
        );
        $insert = $this->db->insert('tbl_akun', $data);
        if ($insert) {
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
        $data = $this->db->get('tbl_akun')->row_array();

        if ($data) {
            $output['id_akun'] = $data['id_akun'];
            $output['username'] = $data['username'];
            $this->response($output, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function cek_user_post()
    {
        $post = $this->input->post();
        $username = $post['username'];

        $this->db->where('username', $username);
        $data = $this->db->get('tbl_akun')->row_array();

        if ($data) {
            $output['username'] = $data['username'];
            $this->response($output, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function notif_post()
    {
        $post = $this->input->post();
        $token = $post['token'];
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $msg = array(
            'body'  => 'Tes Notif Aja',
            'title' => "Pemberitahuan baru ",
            'sound' => 'default'
        );
        $dt = array(

            'jenis_notif'   => "surat masuk",
            'message'       => "No. Surat ",
            'title'         => "Surat Masuk Baru ",
            'sound'         => 'default'
        );
        $notification = [
            "to"            => $token,
            'notification'  => $msg,
            'data'          => $dt
        ];
        $headers = [
            'Authorization: key=AAAAAFnObcw:APA91bF5v526m_AmolfyC-B6Pd8k1bqf-u22qVrtbBOcHnMw3VrccItnJQJTmi93_eTnNa051p6Ow8TDQ0Fj_cJ1gjtdM0JtGcxeVPakJsHUTxaX7FM8xWsxbWWHd6aL6qZzOt6GYULW',
            'Content-Type: application/json'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notification));
        curl_exec($ch);
        curl_close($ch);
    }




    //Masukan function selanjutnya disini
}
