<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_laporanku");
        $this->load->database();
    }

    function index()
    {
        $this->load->view('excel_import');
    }
    public function laporan()
    {
        $jenis = $this->input->post("jenis");
        $namabarang = $this->input->post("namabarang");
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        if($jenis == null && $namabarang == null && $tglawal == null && $tglakhir == null) {
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangmasuk JOIN tb_detailmasuk ON tb_barangmasuk.id_barang_masuk=tb_detailmasuk.id_barang_masuk JOIN tb_barang ON tb_barang.id_barang=tb_detailmasuk.id_barang")->result();
            $this->load->view("v_laporan", $data);
        }else if($tglawal == null || $tglakhir == null){
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangmasuk JOIN tb_detailmasuk ON tb_barangmasuk.id_barang_masuk=tb_detailmasuk.id_barang_masuk JOIN tb_barang ON tb_barang.id_barang=tb_detailmasuk.id_barang WHERE tb_detailmasuk.jenis='$jenis'")->result();
            $this->load->view("v_laporan", $data);
        }else if($jenis == 'null'){
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangmasuk JOIN tb_detailmasuk ON tb_barangmasuk.id_barang_masuk=tb_detailmasuk.id_barang_masuk JOIN tb_barang ON tb_barang.id_barang=tb_detailmasuk.id_barang WHERE tb_barangmasuk.tanggal_masuk BETWEEN '$tglawal' AND '$tglakhir'")->result();
            $this->load->view("v_laporan", $data);
        }else{
            $data['barang'] = $this->db->query("SELECT * FROM tb_barangmasuk JOIN tb_detailmasuk ON tb_barangmasuk.id_barang_masuk=tb_detailmasuk.id_barang_masuk JOIN tb_barang ON tb_barang.id_barang=tb_detailmasuk.id_barang WHERE tb_detailmasuk.jenis='$jenis' AND tb_barangmasuk.tanggal_masuk BETWEEN '$tglawal' AND '$tglakhir'")->result();
            $this->load->view("v_laporan", $data);

        }
    }

    public function cetakMasuk()
    {
        $id = $this->uri->segment(3);
        $data['barang'] = $this->db->query("SELECT * FROM tb_barangmasuk
        JOIN tb_detailmasuk ON tb_barangmasuk.id_barang_masuk=tb_detailmasuk.id_barang_masuk
        JOIN tb_barang ON tb_barang.id_barang=tb_detailmasuk.id_barang")->result();
        $this->load->view("v_cetakmasuk", $data);
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

    public function getlaporan()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporanku->getlaporan($postData);

        echo json_encode($data);
    }
    public function getpenjualan()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporanku->getPenjualan($postData);

        echo json_encode($data);
    }
    public function getbukubesar()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporanku->getBukubesar($postData);

        echo json_encode($data);
    }
    public function getlabarugi()
    {
        // POST data
        $postData = $this->input->post();
        // Get data
        $data = $this->M_laporanku->getLabarugi($postData)[0];

        header('content-type:json/application');
        echo json_encode($data);
    }


}

