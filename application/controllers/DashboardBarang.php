<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardBarang extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->load->library('Commonfunction','','fn');
        $this->load->model('M_Dashboardbarang');
				
		//if(!isset($this->session->userdata['name']))		
		//	redirect("login","refresh");
	}
	/*	
		====================================================== Variable Declaration =========================================================
	*/
	public function index()
	{
		//init modal
		
        $this->fn->getheader();	
        $data['barang'] = $this->M_Dashboardbarang->jum_barang();
        $data['barangmasuk'] = $this->M_Dashboardbarang->jum_barangmasuk();
        $data['barangkeluar'] = $this->M_Dashboardbarang->jum_barangkeluar();
		$data['karyawan'] = $this->M_Dashboardbarang->jum_karyawan();
		$data['riwayat'] =$this->M_Dashboardbarang->getHistory()->result();
		$data['riwayatkeluar'] =$this->M_Dashboardbarang->getHistoryKeluar()->result();
		$this->load->view('AdmdashboardBarang', $data);
        $this->fn->getfooter();
        
        

	
		
	}
	

	public function getAllproduct()
	{
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_barang AS a
								JOIN tb_loker AS b ON a.id_loker=b.id_loker
								GROUP BY tipe_barang
								",
							"tipe_barang as nama,COUNT(tipe_barang) as jum");

		if($render->num_rows() > 0 )
		{
			foreach($render->result() as $row)
			$retVal .= $row->nama . "++" . $row->jum . "||";
		}

			echo $retVal;
	}
	
	
	public function getBarangkeluar()
	{
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_barangkeluar AS a
								JOIN tb_detailkeluar AS b ON a.id_barang_keluar = b.id_barang_keluar
								JOIN tb_barang AS c ON b.id_barang = c.id_barang
								JOIN tb_karyawan AS d ON a.id_karyawan = d.id_karyawan
								GROUP BY c.des_barang
								",
							"c.des_barang as nama,COUNT(c.des_barang) as jum");

		if($render->num_rows() > 0 )
		{
			foreach($render->result() as $row)
			$retVal .= $row->nama . "++" . $row->jum . "||";
		}

			echo $retVal;
	}


	public function getBarangmasuk()
	{
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_barangmasuk AS a
								JOIN tb_detailmasuk AS b ON a.id_barang_masuk = b.id_barang_masuk
								JOIN tb_barang AS c ON b.id_barang = c.id_barang
								GROUP BY c.des_barang
								",
							"c.des_barang as nama,COUNT(c.des_barang) as jum");

		if($render->num_rows() > 0 )
		{
			foreach($render->result() as $row)
			$retVal .= $row->nama . "++" . $row->jum . "||";
		}

			echo $retVal;
	}
    
    public function getJumlahperBulan()
	{
		//init modal
		$this->load->database();		
		$this->load->model('Mmain');
	
		//echo $id;
		//echo $year;
		$dataTemp=$this->Mmain->qRead(	"
											tb_barangkeluar a
												
												WHERE YEAR(tanggal_keluar)= YEAR(CURDATE())
												GROUP BY substr(tanggal_keluar,1,7) 
												ORDER BY MONTH(tanggal_keluar)
										",
										"
											CASE 
												WHEN MONTH(tanggal_keluar) ='01' THEN 'Januari'
												WHEN MONTH(tanggal_keluar) ='02' THEN 'Februari'
												WHEN MONTH(tanggal_keluar) ='03' THEN 'Maret'
												WHEN MONTH(tanggal_keluar) ='04' THEN 'April'
												WHEN MONTH(tanggal_keluar) ='05' THEN 'Mei'
												WHEN MONTH(tanggal_keluar) ='06' THEN 'Juni'
												WHEN MONTH(tanggal_keluar) ='07' THEN 'Juli'
												WHEN MONTH(tanggal_keluar) ='08' THEN 'Agustus'
												WHEN MONTH(tanggal_keluar) ='09' THEN 'September'
												WHEN MONTH(tanggal_keluar) ='10' THEN 'Oktober'
												WHEN MONTH(tanggal_keluar) ='11' THEN 'November'
												WHEN MONTH(tanggal_keluar) ='12' THEN 'Desember'
											END as bln,
											COUNT(substr(tanggal_keluar,1,7) ) as tot
										","");
		$val="";
		$f1="";
		$dt=null;
		$tot=null;
		$bulan=Array(
					"Januari",
					"Februari",
					"Maret",
					"April",
					"Mei",
					"Juni",
					"Juli",
					"Agustus",
					"September",
					"Oktober",
					"November",
					"Desember"
					);
					
		$retVal1="";
		foreach($dataTemp->result() as $row)
		{
			$dt[]=$row->bln;
			$tot[]=$row->tot;
		}
		
		$j=0;
		for($i=0;$i<12;$i++)
		{
			$totbln=0;
			if(count($dt)>$j)
			{
				if($dt[$j]==$bulan[$i])
				{
					$totbln=$tot[$j];
					$j++;
					
				}
			}
			$retVal1.=$bulan[$i]."++".$totbln."||";
		}
		
		$retVal1=substr($retVal1,0,strlen($retVal1)-2);
		
		//echo implode("<br>",$dt);
		//echo $retVal2;
		$retVal=$retVal1;
		echo $retVal;
		
		
	}
	
   
    
}
?>
