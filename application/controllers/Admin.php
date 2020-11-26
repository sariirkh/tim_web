<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->db->join('tbl_mahasiswa', 'tbl_mahasiswa.NIM=tbl_pengajuan.NIM');
        $this->db->where('status', 'Mendaftar');
        $data['mhs'] = $this->db->get('tbl_pengajuan')->result();
        $this->load->view('header');
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    public function mahasiswa()
    {
        $this->db->join('tbl_mahasiswa', 'tbl_mahasiswa.NIM=tbl_pengajuan.NIM');
        $this->db->where('status', 'diterima');
        $data['mhs'] = $this->db->get('tbl_pengajuan')->result();
        $this->load->view('header');
        $this->load->view('mahasiswa', $data);
        $this->load->view('footer');
    }
    public function ubahStatus()
    {
        $post = $this->input->post();
        $nim = $post['NIM'];
        $status = $post['status'];
        $this->db->set('status', $status);
        $this->db->where('NIM', $nim);
        $cek = $this->db->update('tbl_pengajuan');
        if ($cek) {
            redirect('admin/');
        }
    }

    public function daily()
    {
        $this->db->join('tbl_mahasiswa', 'tbl_mahasiswa.NIM=tbl_daily.NIM');
        $this->db->join('tbl_pengajuan', 'tbl_pengajuan.NIM=tbl_daily.NIM');
        $this->db->where('tbl_pengajuan.status', 'diterima');
        $data['mhs'] = $this->db->get('tbl_daily')->result();
        $this->load->view('header');
        $this->load->view('daily', $data);
        $this->load->view('footer');
    }

    public function addCatatan()
    {
        $post = $this->input->post();
        $this->id_daily = $post['id_daily'];
        $this->catatan = $post['catatan'];
        $q = $this->db->insert('tbl_catatan', $this);
        if ($q) {
            $this->db->set('status', "Telah Dicek");
            $this->db->where('id_daily', $post['id_daily']);
            $this->db->update('tbl_daily');
            redirect('admin/daily');
        }
    }

    public function detailDaily($id_daily = null)
    {
        $this->db->where('id_daily', $id_daily);
        $data['m'] = $this->db->get('tbl_daily')->row();
        $this->load->view('header');
        $this->load->view('detail_daily', $data);
        $this->load->view('footer');
    }

    public function signature()
    {
        $this->load->view('header');
        $this->load->view('signature');
        $this->load->view('footer');
    }

    public function addSignature()
    {
        $post = $this->input->post();
        $this->id_daily = $post['id_daily'];
        $this->catatan = $post['catatan'];
    }
}
