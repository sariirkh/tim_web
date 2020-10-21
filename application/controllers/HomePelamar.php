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

}
