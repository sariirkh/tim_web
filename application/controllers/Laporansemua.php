<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporansemua extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_laporansemua");
        $this->load->database();
    }

    function index()
    {
        $this->load->view('excel_import');
    }
    public function laporan()
    {
        $jenis = $this->input->post("jenis");
        $namabarang = $this->input->post("nama_barang");
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        $filterQuery = "";

        // if($tglawal <> "null" && $tglakhir <> "null")
        //    $filterQuery .= " WHERE a.tanggal_masuk BETWEEN '".$tglawal."' AND '".$tglakhir."' ";

       
        // if($jenis <> "null")
        //     $filterQuery .= " AND b.jenis='". $jenis . "' ";

        if($namabarang <> "null")
            $filterQuery .= " AND brg.nama_barang='" . $namabarang . "' ";

      // echo $filterQuery;
        $data['barang'] = $this->db->query("SELECT 
        brg.id_barang, 
        brg.nama_barang,
        
        CASE 
            WHEN msk.jum IS NULL THEN 0 ELSE msk.jum
        END AS masuk, 
        
        CASE 
            WHEN klr.jum IS NULL THEN 0 ELSE klr.jum
        END AS keluar, 
        
        CASE 
            WHEN msk.jum IS NULL THEN 0 ELSE msk.jum
        END 
        -
         CASE 
            WHEN klr.jum IS NULL THEN 0 ELSE klr.jum
        END AS sisa
        
                    
        FROM 
            tb_barang brg
            
        LEFT OUTER JOIN
        (
            SELECT
                id_barang as id,SUM(jumlah_masuk) as jum
            FROM
            tb_detailmasuk
            GROUP BY id_barang
        )msk ON brg.id_barang = msk.id
        
    
        LEFT OUTER JOIN
        (
            SELECT
                id_barang as id,SUM(jumlah_keluar) as jum
            FROM
            tb_detailkeluar
            GROUP BY id_barang
        )klr ON brg.id_barang = klr.id 
                                        ")->result();
        $this->load->view("v_laporansemua", $data);
     
    }

    public function cetakRekap()
    {
        $tglawal = $this->input->post("tglawal");
        $tglakhir = $this->input->post("tglakhir");
        $id = $this->uri->segment(3);
        $data['barang'] = $this->db->query("SELECT 
        brg.id_barang, 
        brg.nama_barang,
        
        CASE 
            WHEN msk.jum IS NULL THEN 0 ELSE msk.jum
        END AS masuk, 
        
        CASE 
            WHEN klr.jum IS NULL THEN 0 ELSE klr.jum
        END AS keluar, 
        
        CASE 
            WHEN msk.jum IS NULL THEN 0 ELSE msk.jum
        END 
        -
         CASE 
            WHEN klr.jum IS NULL THEN 0 ELSE klr.jum
        END AS sisa
        
                    
        FROM 
            tb_barang brg
            
        LEFT OUTER JOIN
        (
            SELECT
                id_barang as id,SUM(jumlah_masuk) as jum
            FROM
            tb_detailmasuk
            GROUP BY id_barang
        )msk ON brg.id_barang = msk.id
        
    
        LEFT OUTER JOIN
        (
            SELECT
                id_barang as id,SUM(jumlah_keluar) as jum
            FROM
            tb_detailkeluar
            GROUP BY id_barang
        )klr ON brg.id_barang = klr.id ")->result();

        $hitungbrgmasuk = 0;    

        foreach ($data['barang'] as $dm) {
            $hitungbrgmasuk += (double) $dm->masuk;
        }

        $hitungbrgkeluar = 0;

        foreach ($data['barang'] as $dm) {
            $hitungbrgkeluar += (double) $dm->keluar;
        }

        $data['brgmasuk'] = $hitungbrgmasuk;

        $data['brgkeluar'] = $hitungbrgkeluar;

        $data['totalbrg'] = $hitungbrgmasuk - $hitungbrgkeluar;

        $data['controller'] = $this;

        $data['tglawal'] = $tglawal;
		$data['tglakhir'] = $tglakhir;

        $this->load->view("v_cetaksemua", $data);
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

