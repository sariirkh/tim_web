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
        $namabarang = $this->input->post("nama_barang");
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        $filterQuery = "";

        if($tglawal <> "null" && $tglakhir <> "null")
           $filterQuery .= " WHERE a.tanggal_keluar BETWEEN '".$tglawal."' AND '".$tglakhir."' ";

       
        if($namabarang <> "null")
           $filterQuery .= " AND c.nama_barang='" . $namabarang . "' ";

        
      // echo $filterQuery;
        $data['barang'] = $this->db->query("SELECT * FROM tb_barangkeluar AS a 
                                        INNER JOIN tb_detailkeluar AS b ON a.id_barang_keluar=b.id_barang_keluar
                                        INNER JOIN tb_barang AS c ON c.id_barang=b.id_barang
                                        INNER JOIN tb_karyawan AS d ON a.id_karyawan=d.id_karyawan 
                                        ". $filterQuery)->result();
        $this->load->view("v_laporankeluar", $data);
     
    }

    public function cetakKeluar()
    {
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        $id = $this->uri->segment(3);
        $data['barang'] = $this->db->query("SELECT * FROM tb_barangkeluar 
        JOIN tb_detailkeluar ON tb_barangkeluar.id_barang_keluar=tb_detailkeluar.id_barang_keluar 
        JOIN tb_barang ON tb_barang.id_barang=tb_detailkeluar.id_barang 
        JOIN tb_karyawan ON tb_karyawan.id_karyawan=tb_barangkeluar.id_karyawan ")->result();

        $hitungbrgmasuk = 0;

        foreach ($data['barang'] as $dm) {
            $hitungbrgmasuk += (double) $dm->jumlah_keluar;
        }

        $hitungbrgkeluar = 0;

        foreach ($data['barang'] as $dm) {
            $hitungbrgkeluar += (double) $dm->jumlah_keluar;
        }

        $data['brgmasuk'] = $hitungbrgmasuk;

        $data['brgkeluar'] = $hitungbrgkeluar;

        $data['totalbrg'] = $hitungbrgmasuk - $hitungbrgkeluar;

        $data['controller'] = $this;

        $data['tglawal'] = $tglawal;
		$data['tglakhir'] = $tglakhir;

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
