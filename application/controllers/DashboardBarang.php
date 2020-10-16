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
		$this->load->view('AdmdashboardBarang', $data);
        $this->fn->getfooter();
        
        

	
		
    }
    
    
   
    
}
?>
