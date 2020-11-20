<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporankeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_laporankeluar");
        $this->load->database();
    }

    function index()
    {
        $this->load->view('excel_import');
    }
    public function laporan()
    {
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        if($tglawal == null || $tglakhir == null) {
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangkeluar JOIN tb_detailkeluar ON tb_barangkeluar.id_barang_keluar=tb_detailkeluar.id_barang_keluar JOIN tb_barang ON tb_barang.id_barang=tb_detailkeluar.id_barang")->result();
            $this->load->view("v_laporankeluar", $data);
        }else if($tglawal == null || $tglakhir == null){
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangkeluar JOIN tb_detailkeluar ON tb_barangkeluar.id_barang_keluar=tb_detailkeluar.id_barang_keluar JOIN tb_barang ON tb_barang.id_barang=tb_detailkeluar.id_barang")->result();
            $this->load->view("v_laporankeluar", $data);
        }else{
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangkeluar JOIN tb_detailkeluar ON tb_barangkeluar.id_barang_keluar=tb_detailkeluar.id_barang_keluar JOIN tb_barang ON tb_barang.id_barang=tb_detailkeluar.id_barang AND tb_barangkeluar.tanggal_keluar BETWEEN '$tglawal' AND '$tglakhir'")->result();
            $this->load->view("v_laporankeluar", $data);

        }
    }

    public function cetakKeluar()
    {
        $id = $this->uri->segment(3);
        $data['barang'] = $this->db->query("SELECT * FROM tb_barangkeluar 
        JOIN tb_detailkeluar ON tb_barangkeluar.id_barang_keluar=tb_detailkeluar.id_barang_keluar 
        JOIN tb_barang ON tb_barang.id_barang=tb_detailkeluar.id_barang 
        JOIN tb_karyawan ON tb_karyawan.id_karyawan=tb_barangkeluar.id_karyawan ")->result();
        $this->load->view("v_cetakkeluar", $data);
    }

    public function detail()
    {
        $id = $this->uri->segment(3);
        $data['barang'] = $this->db->query("SELECT * FROM barang_masuk WHERE id_barang_masuk='$id'")->result();
        $this->load->view("detail_laporan", $data);
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

    public function getlaporankeluar()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporankeluar->getlaporankeluar($postData);

        echo json_encode($data);
    }
    public function getpenjualan()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporankeluar->getPenjualan($postData);

        echo json_encode($data);
    }
    public function getbukubesar()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporankeluar->getBukubesar($postData);

        echo json_encode($data);
    }
    public function getlabarugi()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporankeluar->getLabarugi($postData)[0];

        header('content-type:json/application');
        echo json_encode($data);
    }


}
