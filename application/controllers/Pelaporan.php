<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pelaporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_laporan");
        $this->load->database();
    }

    function index()
    {
        $this->load->view('excel_import');
    }
    public function pelaporan()
    {
        $jk = $this->input->post("jk");
        $lulusan= $this->input->post("lulusan");
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        if($jk == null || $tglawal == null || $tglakhir == null   ) {
            $data['pelamar'] = $this->db->query("SELECT * FROM tb_pelamar JOIN tb_cr ON tb_pelamar.loker_pelamar=tb_cr.id_cr")->result();
            $this->load->view("v_pelaporan", $data);
        }else if($jk == 'null'){
            $data['pelamar'] = $this->db->query("SELECT * FROM tb_pelamar JOIN tb_cr ON tb_pelamar.loker_pelamar=tb_cr.id_cr WHERE TglDaftar_pelamar BETWEEN '$tglawal' AND '$tglakhir'")->result();
            $this->load->view("v_pelaporan", $data);
        }else if($lulusan == 'null'){
            $data['pelamar'] = $this->db->query("SELECT * FROM tb_pelamar JOIN tb_cr ON tb_pelamar.loker_pelamar=tb_cr.id_cr WHERE TglDaftar_pelamar BETWEEN '$tglawal' AND '$tglakhir'")->result();
            $this->load->view("v_pelaporan", $data);
        }else{
            $data['pelamar'] = $this->db->query("SELECT * FROM tb_pelamar JOIN tb_cr ON tb_pelamar.loker_pelamar=tb_cr.id_cr WHERE jk_pelamar='$jk' AND TglDaftar_pelamar BETWEEN '$tglawal' AND '$tglakhir' ")->result();
            $this->load->view("v_pelaporan", $data);
        }
    
    }
    public function detail()
    {
        $id = $this->uri->segment(3);
        $data['pelamar'] = $this->db->query("SELECT * FROM tb_pelamar WHERE id_pelamar='$id'")->result();
        $this->load->view("detail_pelaporan", $data);
    }
    public function cetak()
    {
        $id = $this->uri->segment(3);
        $data['pelamar'] = $this->db->query("SELECT * FROM tb_pelamar WHERE id_pelamar='$id'")->result();
        $this->load->view("v_cetak", $data);
    }
    public function laporanbukubesar()
    {

        $param['pageInfo'] = "List Buku Besar";
        $this->template->load("laporan/v_bukubesar", $param);
    }
    public function laporanlabarugi()
    {

        $param['pageInfo'] = "List Buku Besar";
        $this->template->load("laporan/v_labarugi", $param);
    }

    public function getPelaporan()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporan->getPelaporan($postData);

        echo json_encode($data);
    }
    public function getpenjualan()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporan->getPenjualan($postData);

        echo json_encode($data);
    }
    public function getbukubesar()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporan->getBukubesar($postData);

        echo json_encode($data);
    }
    public function getlabarugi()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporan->getLabarugi($postData)[0];

        header('content-type:json/application');
        echo json_encode($data);
    }


}
