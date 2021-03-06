<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller 
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
	var $viewPage="Admviewpage";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_barang DESC ";
	var $tableQuery="
						tb_barang AS a INNER JOIN tb_loker AS b WHERE a.id_loker=b.id_loker
						";
	var $fieldQuery="
						a.id_barang,
						a.addt_barang,
						a.tipe_barang,
						a.nama_barang,
						a.des_barang,
						a.stok_barang,
						b.nama_loker
						
						"; //leave blank to show all field  ... 0 as aksi
						
	var $primaryKey="id_barang";
	//var $detKey="nik";
	var $updateKey="a.id_barang";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	// var $defaultId="GS-20110001";
	// var $prefix="GS-";
	// var $suffix="200110001";	
	
	//view
	var $viewFormTitle="Data Barang";
	var $viewFormTableHeader=array(
									"Product Code",
									"Additional Code",
									"Product Type",
									"Product Name",
									"Product Description",
									"Stock",
									"Locker"
									//"Aksi"
									);
	
	//save
	var $saveFormTitle="Tambah Barang";
	var $saveFormTableHeader=array(
									"Product Code",
									"Additional Code",
									"Product Type",
									"Product Name",
									"Product Description",
									"Stock",
									"Locker"
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
				//$txtVal[0]=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
				
	
		}
		$cboLoker=$this->fn->createCbofromDb("tb_loker","id_loker as id, concat(nama_loker ,' - ',id_loker) as nm","",$txtVal[6],"","txt[]");
		
		$output['formTxt']=array(
								"<input type='text' class='form-control' autocomplete=off id='txtIdBarang' name=txt[] value='".$txtVal[0]."' required placeholder='' maxlength='11'>",
								"<input type='text' class='form-control' autocomplete=off id='txtAddtBarang' name=txt[] value='".$txtVal[1]."' required placeholder='' maxlength='11'>",
								"<input type='text' class='form-control' autocomplete=off id='txtTipeBarang' name=txt[] value='".$txtVal[2]."' required placeholder='' maxlength='50'>",
								"<input type='text' class='form-control' autocomplete=off id='txtNamaBarang' name=txt[] value='".$txtVal[3]."' required placeholder='' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtDesBarang' name=txt[] value='".$txtVal[4]."' required placeholder='' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtStokBarang' name=txt[] value='".$txtVal[5]."' required placeholder='-' maxlength='11'>",
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
		// $avauser="";
		// if(!empty($_FILES['txtfl']['name']))
		// {
		// 	$flName=$_FILES['txtfl']['name'];
		// 	$flTmp=$_FILES['txtfl']['tmp_name'];
		// 	$fltype=$_FILES['txtfl']['type'];
		// 	move_uploaded_file($flTmp,"assets/admin/img/avatar/thumb/".$flName);
		// 	$avauser=$flName;
		// }
		// else
		// {
		// 	$avauser=$this->input->post('txtimg');
		// }
		
		
		
		
		// $savValTemp[] = $savValUserTemp[0];
		
		
		// //foreach($savValTemp as $i => $row) echo ($i+1)." ".$row."<br>";
		// //foreach($savValUserTemp as $i => $row) echo ($i+1)." ".$row."<br>";
		
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		$this->session->set_flashdata('successNotification', '2');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	//fungsi kerangjang sementara
	public function tambahkeranjang($id )
	{
		
		$this->load->database();
		$this->load->model('Mmain');

		//init view
	
		$this->Mmain->qIns("tb_keranjang",Array(
			0,
			date("Y-m-d"),
			date("H:i:s"),
			$id,
			1,
			"",
			"catatan"
			));

		//$this->Mmain->qUpdPart("tb_barang","id_barang",$id,Array("stok_barang"),Array($stokbaru));
		//$this->Mmain->qUpdPart("tb_keranjang","id_barang",$id,Array("jumlah"));
			//redirect to form
			redirect($this->viewLink,'refresh');		

	}
	
}

?>
