<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller
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
        //$ms = $this->load->database('mssql',TRUE);
        //$ms->query();
        $post = $this->input->post();
        $data = array(
            'NIM' => $post['NIM'],
            'nama_mahasiswa' => $post['nama_mahasiswa'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat_mahasiswa' => $post['alamat_mahasiswa'],
            'asal_kampus' => $post['asal_kampus'],
            'jurusan' => $post['jurusan'],
            'foto_mahasiswa' => $post['foto_mahasiswa'],
            'no_hp' => $post['no_hp'],
            'email' => $post['email'],
            'ipk' => $post['ipk'],
            'tgl_daftar' => date('dd-mm-YY'),
            'id_akun' => $post['id_akun']
        );
        $q = $this->db->insert('tbl_mahasiswa', $data);
        if ($q) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function cek_post()
    {
        $post = $this->input->post();
        $this->db->where('NIM', $post['NIM']);
        $cek = $this->db->get('tbl_mahasiswa')->row_array();
        if ($cek) {
            $out['NIM'] = $cek['NIM'];
            $this->response($out, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        //echo "sukses";
    }

    function cek_data_post()
    {
        $post = $this->input->post();
        $this->db->where('id_akun', $post['id_akun']);
        $cek = $this->db->get('tbl_mahasiswa')->row_array();
        if ($cek) {
            $out['id_akun'] = $cek['id_akun'];
            $out['NIM'] = $cek['NIM'];
            $out['nama_mahasiswa'] = $cek['nama_mahasiswa'];
            $out['alamat_mahasiswa'] = $cek['alamat_mahasiswa'];
            $out['asal_kampus'] = $cek['asal_kampus'];
            $out['jurusan'] = $cek['jurusan'];
            $out['foto_mahasiswa'] = $cek['foto_mahasiswa'];
            $this->response($out, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function kelamin_get()
    {
        $this->db->select('COUNT(NIM) as jumlah,jenis_kelamin');
        $this->db->group_by('jenis_kelamin');
        $data = $this->db->get('tbl_mahasiswa')->result();
        $this->response($data, 200);
    }

    function kampus_get()
    {
        $this->db->select('COUNT(NIM) as jumlah,asal_kampus');
        $this->db->group_by('asal_kampus');
        $data = $this->db->get('tbl_mahasiswa')->result();
        $this->response($data, 200);
    }

    function jurusan_get()
    {
        $this->db->select('COUNT(NIM) as jumlah,jurusan');
        $this->db->group_by('jurusan');
        $data = $this->db->get('tbl_mahasiswa')->result();
        $this->response($data, 200);
    }

    function status_get()
    {
        $this->db->select('COUNT(id_daily) as jumlah,status');
        $this->db->group_by('status');
        $data = $this->db->get('tbl_daily')->result();
        $this->response($data, 200);
    }
}
