<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardtracking extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->load->library('Commonfunction','','fn');
        $this->load->model('M_Dashboardtracking');
				
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
        $data['kendaraan'] = $this->M_Dashboardtracking->jum_kendaraan();
        $data['lokasi'] = $this->M_Dashboardtracking->jum_request();
        $data['riwayat'] = $this->M_Dashboardtracking->jum_update();
        $data['pengguna_kendaraan'] = $this->M_Dashboardtracking->jum_pengguna();
		$this->load->view('Admdashboardtracking', $data);
        $this->fn->getfooter();
        
        

	
		
    }
    public function map(){
        $this->load->view('Admdashboardtracking');
    }
	
	public function getJenisKendaraan()
	{

		
		$this->load->database();
		$this->load->model('Mmain');
		$retVal= "";
		
		$render = $this->Mmain->qRead("
								tb_lokasi a 
								INNER JOIN tb_kendaraan b ON a.id_kendaraan = b.id_kendaraan 
								GROUP BY b.jenis_kendaraan
								",
							"b.jenis_kendaraan as nama,COUNT(b.jenis_kendaraan) as jum");

		if($render->num_rows() > 0 )
		{
			foreach($render->result() as $row)
			$retVal .= $row->nama . "++" . $row->jum . "||";
		}

			echo $retVal;
	}
   
    
}
?>

