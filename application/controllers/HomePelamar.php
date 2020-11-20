<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePelamar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->load->library('Commonfunction','','fn');
        $this->load->model('M_HomePelamar');
				
		//if(!isset($this->session->userdata['name']))		
		//	redirect("login","refresh");
	}
	/*	
		====================================================== Variable Declaration =========================================================
	*/
	public function index()
	{
        $this->fn->getheader();	
		$data['Pelamar'] = $this->M_HomePelamar->jum_Pelamar();
		//$data['Pelaporan'] = $this->M_HomePelamar->v_pelaporan();
		
		$totOpen = $this->Mmain->qRead("tb_pelamar WHERE statuslowongan_pelamar = 'open' ","")->num_rows();
		$totDiterima = $this->Mmain->qRead("tb_pelamar WHERE tahapan_pelamar = 'diterima' ","")->num_rows();
		$totGagal = $this->Mmain->qRead("tb_pelamar WHERE tahapan_pelamar = 'gagal' " ,"")->num_rows();

		$data['totOpen'] = $totOpen;
		$data['totDiterima'] = $totDiterima;
		$data['totGagal'] = $totGagal;
		
		$this->load->view('AdmHomePelamar', $data);


        $this->fn->getfooter();
		
	}
	public function getJenisKelamin()
	{

		
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_pelamar  
								id_pelamar  
								GROUP BY jk_pelamar
								",
							"jk_pelamar as nama,COUNT(jk_pelamar) as jum");

		if($render->num_rows() > 0 )
		{
			foreach($render->result() as $row)
			$retVal .= $row->nama . "++" . $row->jum . "||";
		}

			echo $retVal;
	}
   
	public function getLulusan()
	{

		
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_pelamar  
								id_pelamar  
								GROUP BY pdkterakhir_pelamar
								",
							"pdkterakhir_pelamar as nama,COUNT(pdkterakhir_pelamar) as jum");

		if($render->num_rows() > 0 )
		{
			foreach($render->result() as $row)
			$retVal .= $row->nama . "++" . $row->jum . "||";
		}

			echo $retVal;
	}
	public function getKota()
	{

		
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_pelamar  
								id_pelamar  
								GROUP BY kota_pelamar
								",
							"kota_pelamar as nama,COUNT(kota_pelamar) as jum");

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
											tb_pelamar a
												
												WHERE YEAR(TglDaftar_pelamar)= YEAR(CURDATE())
												GROUP BY substr(TglDaftar_pelamar,1,7) 
												ORDER BY MONTH(TglDaftar_pelamar)
										",
										"
											CASE 
												WHEN MONTH(TglDaftar_pelamar) ='01' THEN 'Januari'
												WHEN MONTH(TglDaftar_pelamar) ='02' THEN 'Februari'
												WHEN MONTH(TglDaftar_pelamar) ='03' THEN 'Maret'
												WHEN MONTH(TglDaftar_pelamar) ='04' THEN 'April'
												WHEN MONTH(TglDaftar_pelamar) ='05' THEN 'Mei'
												WHEN MONTH(TglDaftar_pelamar) ='06' THEN 'Juni'
												WHEN MONTH(TglDaftar_pelamar) ='07' THEN 'Juli'
												WHEN MONTH(TglDaftar_pelamar) ='08' THEN 'Agustus'
												WHEN MONTH(TglDaftar_pelamar) ='09' THEN 'September'
												WHEN MONTH(TglDaftar_pelamar) ='10' THEN 'Oktober'
												WHEN MONTH(TglDaftar_pelamar) ='11' THEN 'November'
												WHEN MONTH(TglDaftar_pelamar) ='12' THEN 'Desember'
											END as bln,
											COUNT(substr(TglDaftar_pelamar,1,7) ) as tot
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

