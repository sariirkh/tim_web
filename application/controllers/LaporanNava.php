<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanNava extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Commonfunction','','fn');
				
		//if(!isset($this->session->userdata['name']))		
		//	redirect("login","refresh");
	}
	/*	
		====================================================== Variable Declaration =========================================================
	*/
	
	var $mainTable="tb_barang";
	var $mainPk="id_barang";
	var $viewLink="Barang";
	// var $viewLink2="Users";
	//sub menu atau header
	var $breadcrumbTitle="Data Barang";
	//var $breadcrumbTitle2="User Access";
	// buat tampilan view data
	var $viewPage="Admviewlaporan";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_barang DESC ";
	var $tableQuery="
						tb_barang
						";
	var $fieldQuery="
						id_barang,
						nama_barang,
						stok_barang						
						"; //leave blank to show all field  ... 0 as aksi
						
	var $primaryKey="id_barang";
	//var $detKey="nik";
	var $updateKey="id_barang";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	var $defaultId="GA00001";
	var $prefix="GA";
	var $suffix="00001";	
	
	//view
	var $viewFormTitle="Data Barang";
	var $viewFormTableHeader=array(
									"Id Barang",
									"Nama Barang",
									"Stok"
									//"Aksi"
									);
	
	//save
	var $saveFormTitle="Tambah Barang";
	var $saveFormTableHeader=array(
									"Id Barang",
									"Nama Barang",
									"Stok"
									);
	
	//update
	var $editFormTitle="Ubah Data Barang";
	//$update="UPDATE tb_barang, barang_masuk set tb_barang.jumlah_barang=barang_masuk.jumlah_masuk where tb_barang.id_barang=tail.id_barang=$primaryKey"
	//mysql_query($update)or die (mysql_error())

	/*	
		========================================================== General Function =========================================================
	*/
	
	public function index()
	{
		//init modal
		$this->load->database();
		$this->load->model('Mmain');
		
		//check user access	
		$isAll = $this->Mmain->qRead(
										"tb_accfrm AS a INNER JOIN tb_frm AS b ON a.code_frm = b.code_frm 
										WHERE a.id_acc ='".$this->session->userdata['accUser']."' AND b.id_frm='".$this->viewLink."'",
										"a.is_add as isadd,a.is_edt as isedt,a.is_del as isdel,a.is_spec1 as acc1,a.is_spec2 as acc2","");
		foreach($isAll ->result() as $row)
		{
			$access=$row;
		}
		//$selfDept=$this->Mmain->qRead("tb_emp WHERE id_emp='".$this->session->userdata('idEmp')."'","id_div,id_loc","")->row();
		
		//$output['isall']=$access->isadd;
		$accessQuery="";
		/*
		if($access->acc2<>1)
		{
			
		$this->viewFormTableHeader=array(
									"Avatar",
									"Name",
									"Workplace",
									"NIK",
									"Division",
									"Departement",
									"Sex",
									"Phone",
									"Address",
									"E-Mail");
									$this->tableQuery.=" WHERE a.show_emp=1 ";
		}
		*/
			//$accessQuery="WHERE b.code_user ='".$this->session->userdata['codeUser']."'";
			
			
		
		//init view
		$output['formAccess']=$access;
		
		$renderTemp=$this->Mmain->qRead($this->tableQuery.$this->ordQuery,$this->fieldQuery,"");
		foreach($renderTemp->result() as $row)
		{
			$row->aksi = "<a href='".site_url()."Barang/tambahkeranjang/".$row->id_barang	."' class='btn btn-primary'>Tambah Keranjang</a>"; //menambah tombol tambah
		}
		$output['render']=$renderTemp;
		//init view
		$output['pageTitle']=$this->viewFormTitle;
		$output['breadcrumbTitle']=$this->breadcrumbTitle;
		$output['breadcrumbLink']=$this->viewLink;
		$output['saveLink']=$this->viewLink."/add";
		$output['deleteLink']=$this->viewLink."/delete";
		$output['primaryKey']=$this->primaryKey;
		//$output['detKey']=$this->detKey;
		$output['tableHeader']=$this->viewFormTableHeader;
		//$output['dtcustom']="datatableemp";
		
		//render view
		$this->fn->getheader();
		$this->load->view($this->viewPage,$output);
		$this->fn->getfooter();
	}
	

	
	public function add($isEdit="")
	{
		//init modal
		$this->load->database();
		$this->load->model('Mmain');
		
		
		//init view
		$output['pageTitle']=$this->saveFormTitle;
		$output['breadcrumbTitle']=$this->breadcrumbTitle;
		$output['breadcrumbLink']=$this->viewLink;
		$output['saveLink']=$this->viewLink."/save";
		$output['tableHeader']=$this->saveFormTableHeader;
		$output['formLabel']=$this->saveFormTableHeader;
		
		$imgTemp="";
		$codeTemp="";
		$isRo="";
		if(!empty($isEdit))
		{
			
			$output['pageTitle']=$this->editFormTitle;
			$output['saveLink']=$this->viewLink."/update";
			$pid=$isEdit;
			
			$render=$this->Mmain->qRead($this->tableQuery,$this->fieldQuery,$this->mainPk."  = '".$isEdit."'");
			foreach($render->result() as $row)
			{
				foreach($row as $col)
				{
					$txtVal[]= $col;
				}
			}
			
		}
		else
		{	
				for($i=0;$i<count($this->saveFormTableHeader);$i++)
				{
					$txtVal[]="";//$this->saveFormTableHeader[$i];
				}	
				
				//generate id
				$txtVal[0]=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
				
	
		}
		$cboLoker=$this->fn->createCbofromDb("tb_loker","id_loker as id, concat(id_loker ,' - ',nama_loker) as nm","",$txtVal[3],"","txt[]");
		
		$output['formTxt']=array(
								"<input type='text' class='form-control' id='txtIdBarang' name=txt[] value='".$txtVal[0]."' required readonly placeholder='' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtNamaBarang' name=txt[] value='".$txtVal[1]."' required placeholder='' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtStokBarang' name=txt[] value='".$txtVal[2]."' required placeholder='Masukan nilai 0' maxlength='70'>",
								$cboLoker
							);
		
		
		//load view
		$this->fn->getheader();
		$this->load->view($this->addPage,$output);
		$this->fn->getfooter();
	}	
	
	public function save()
	{
		//retrieve values
		$savValTemp=$this->input->post('txt');
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
		$this->Mmain->qIns($this->mainTable,$savValTemp);
		
		$this->session->set_flashdata('successNotification', '1');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	
	//delete record
	public function delete($valId)
	{		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		$this->Mmain->qDel($this->mainTable,$this->mainPk,$valId);
		
		$this->session->set_flashdata('successNotification', '3');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	
	//update record
	public function update()
	{
		//$b=$this->input->post('stok_barang');
		//update tb_barang set where'stok_barang'='stok_barang'+$b;
	
		//retrieve values
		$savValTemp=$this->input->post('txt');
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		$this->session->set_flashdata('successNotification', '2');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}

	public function tgl_indo($tanggal){
		$bulan = array (
			'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember',
		);
		$pecahkan = explode('-', $tanggal);
		
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}
		
	public function laporan_cetak()
	{
		if ($this->session->userdata('level') == 1) {
			$sort = $this->input->post('sort');
			$tglawal = $this->input->post('tglawal');
			$tglakhir = $this->input->post('tglakhir');

			if (!empty($tgllawal) AND !empty($tgllakhir)) {
				$where = array(
					'tanggal_masuk >=' => $tgllawal,
					'tanggal_masuk <=' => $tglakhir
				);
			}elseif (!empty($tglawal) AND empty($tglakhir)) {
				$where = array(
					'tanggal_masuk >=' => $tglawal
				);
			}elseif (empty($tglawal) AND !empty($tglakhir)) {
				$where = array(
					'tanggal_masuk <=' => $tglakhir
				);
			}else{
				$where = array();
			}

			if ($sort == 'semua') {
				$this->db->order_by("tanggal_masuk", "ASC");
				$data['barang'] = $this->db->select('*')
			    							   ->from('tb_barangmasuk')
			    							   ->join('tb_detailmasuk', 'tb_detailmasuk.id_barang_masuk = tb_barangmasuk.id_barang_masuk','inner')
			    							   ->join('tb_barang', 'tb_barang.id_barang = tb_detailmasuk.id_barang','tb_barang.id_barang=tb_barangkeluar.id_barang','inner')
											   
											   ->where($where)
			    							   ->get()
			    							   ->result();

			    $hitungbrgmasuk = 0;

			    foreach ($data['barang'] as $dm) {
			  		$hitungbrgmasuk += (double) $dm->jumlah_masuk;
			  	}

			  	$hitungbrgkeluar = 0;

			    foreach ($data['barang'] as $dm) {
			  		$hitungbrgkeluar += (double) $dm->jumlah_keluar;
			  	}

			  	$data['brgmasuk'] = $hitungbrgmasuk;

			  	$data['brgkeluar'] = $hitungbrgkeluar;

			  	$data['totalbrg'] = $hitungbrgmasuk - $hitungbrgkeluar;

				$data['controller'] = $this;

				$data['tgllawal'] = $tglawal;
				$data['tglakhir'] = $tglakhir;

				$this->load->view('v_printsemua',$data);

			}elseif ($sort == 'pemasukanATK') {
				$wherestatus = array(
					
				);

				$this->db->order_by("tanggal_masuk", "ASC");
				$data['barang'] = $this->db->select('*')
			    							   ->from('tb_barangmasuk')
			    							   ->join('tb_detailmasuk', 'tb_detailmasuk.id_barang_masuk = tb_barangmasuk.id_barang_masuk','inner')
											   ->join('tb_barang', 'tb_barang.id_barang = tb_detailmasuk.id_barang','inner')
			    							   ->where($where)
			    							   ->where($wherestatus)
			    							   ->get()
			    							   ->result();

			    $hitungbrgmasuk = 0;

			    foreach ($data['barang'] as $dm) {
			  		$hitungbrgmasuk += (double) $dm->jumlah_masuk;
			  	}

			  	$hitungbrgkeluar = 0;

			    foreach ($data['barang'] as $dm) {
			  		$hitungbrgkeluar += (double) $dm->jumlah_masuk;
			  	}

			  	$data['brgmasuk'] = $hitungbrgmasuk;

			  	$data['brgkeluar'] = $hitungbrgkeluar;

			  	$data['totaldana'] = $hitungbrgmasuk - $hitungbrgkeluar;

				$data['controller'] = $this;

				$data['tglawal'] = $tglawal;
				$data['tglakhir'] = $tglakhir;

				$this->load->view('v_printmasuk',$data);

			}elseif ($sort == 'pengeluaranATK') {
				$wherestatus = array(
					
				);
				
				$this->db->order_by("tanggal_keluar", "ASC");
				$data['barang'] = $this->db->select('*')
			    							   ->from('tb_barangkeluar')
			    							   ->join('tb_detailkeluar', 'tb_detailkeluar.id_barang_keluar = tb_barangkeluar.id_barang_keluar','inner')
			    							   ->join('tb_barang', 'tb_barang.id_barang = tb_detailkeluar.id_barang','inner')
											   ->join('tb_karyawan','tb_karyawan.id_karyawan = tb_barangkeluar.id_karyawan','inner')
											   ->where($where)
			    							   ->where($wherestatus)
			    							   ->get()
			    							   ->result();

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

			  	$data['totaldana'] = $hitungbrgmasuk - $hitungbrgkeluar;

				$data['controller'] = $this;

				$data['tglawal'] = $tglawal;
				$data['tglakhir'] = $tglakhir;

				$this->load->view('v_printkeluar',$data);
			}
		}else{
			$this->load->view('error404');
		}
		
	}
	
	
}

?>