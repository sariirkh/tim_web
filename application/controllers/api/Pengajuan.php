<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pengajuan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
    }

    function index_post()
    {
        $post = $this->input->post();
        $this->db->where('nama_pendamping', $post['nama_pendamping']);
        $cek = $this->db->get('tbl_pembimbing')->row_array();
        $data = array(
            'tgl_mulai' => $post['tgl_mulai'],
            'tgl_selesai' => $post['tgl_selesai'],
            'file' => $post['file'],
            'status' => 'Mendaftar',
            'NIM' => $post['NIM'],
            'tgl_pengajuan' => date('d-m-Y'),
            'id_pendamping' => $cek['id_pendamping']
        );
        $q = $this->db->insert('tbl_pengajuan', $data);
        if ($q) {
            $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
            $msg = array(
                'body'  => 'Halo '.$cek['nama_pendamping'].', Ada pegngajuan proposal baru. ',
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
                "to"            => $cek['token'],
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
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function cek_post()
    {
        $post = $this->input->post();
        $this->db->where('NIM', $post['NIM']);
        $q = $this->db->get('tbl_pengajuan')->row_array();
        if ($q) {
            $out['tgl_mulai'] = $q['tgl_mulai'];
            $out['tgl_selesai'] = $q['tgl_selesai'];
            $out['tgl_pengajuan'] = $q['tgl_pengajuan'];
            $out['NIM'] = $q['NIM'];
            $out['status'] = $q['status'];
            $this->response($out, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function status_put()
    {
        $status = $this->put('status');
        $nim = $this->put('nim');

        $this->db->where('nim', $nim);
        $cekId = $this->db->get('tbl_mahasiswa')->row();

        //----------------------------------
        $this->db->where('id_akun', $cekId->id_akun);
        $cekToken = $this->db->get('tbl_akun')->row();
        $this->db->set('status', $status);
        $this->db->where('nim', $nim);
        $q = $this->db->update('tbl_pengajuan');
        if ($q) {

            $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
            $msg = array(
                'body'  => 'Pengajuan anda ' . $status . '',
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
                "to"            => $cekToken->token,
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

            $this->response($status, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
