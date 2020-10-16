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
        // $data['lokasi'] = $this->M_Dashboardtracking->jum_request();
        // $data['riwayat'] = $this->M_Dashboardtracking->jum_update();
        // $data['pengguna_kendaraan'] = $this->M_Dashboardtracking->jum_pengguna();
		$this->load->view('AdmHomePelamar', $data);
        $this->fn->getfooter();
		
    }

}
