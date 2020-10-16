<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller 
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
	
	var $mainTable="tb_keranjang";
	var $mainPk="id_keranjang";
	var $viewLink="Keranjang";
	// var $viewLink2="Users";
	//sub menu atau header
	var $breadcrumbTitle="Keranjang ATK Keluar";
	//var $breadcrumbTitle2="User Access";
	// buat tampilan view data
	var $viewPage="Admviewpage";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_keranjang DESC ";
	var $tableQuery="
                        tb_keranjang AS a
                        INNER JOIN tb_karyawan AS b
                        INNER JOIN tb_barang AS c ON a.id_keranjang = b.id_karyawan && a.id_keranjang = c.id_barang
						";
	var $fieldQuery="
						a.id_keranjang,
						a.tanggal_keluar,
						a.jam,
						concat(b.id_karyawan,b.nama_karyawan),
						c.id_barang,
						a.jumlah,
						a.catatan
						"; //leave blank to show all field
						
	var $primaryKey="id_keranjang";
	//var $detKey="nik";
	var $updateKey="id_keranjang";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	var $defaultId="KJG0001";
	var $prefix="KJG";
	var $suffix="0001";	
	
	//view
	var $viewFormTitle="Keranjang ATK Keluar";
	var $viewFormTableHeader=array(
									"Id Keranjang",
									"Tanggal Keluar",
									"Jam",
									"Id Karyawan",
									"Id Barang",
									"Jumlah",
									"Catatan"
									);
	
	//save
	var $saveFormTitle="Tambah Barang";
	var $saveFormTableHeader=array(
                                    "Id Keranjang",
                                    "Tanggal Keluar",
                                    "Jam",
                                    "Id Karyawan",
                                    "Id Barang",
                                    "Jumlah",
                                    "Catatan"
									);
	
	//update
	var $editFormTitle="Ubah Data Keranjang";
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
			//$row->aksi = "<a href='".site_url()."Barang/tambahkeranjang' class='btn btn-primary'>Tambah</a>"; //menambah tombol tambah
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
				$txtVal[1] = date("Y-m-d");
				$txtVal[2] = date("H:i:s");
	
		}
		
		//$cboacc=$this->fn->createCbofromDb("tb_acc","id_acc as id,nm_acc as nm","",$txtVal[58],"","txtUser[]");
		$cboKaryawan=$this->fn->createCbofromDb("tb_karyawan","id_karyawan as id, concat(id_karyawan ,'- ',nama_karyawan) as nm","",$txtVal[1],"","txt[]");
		
		$output['formTxt']=array(
                                "<input type='text' class='form-control' id='txtIdKeranjang' name=txt[] value='".$txtVal[0]."' required readonly placeholder='Max. 70 karakter' maxlength='70'>",
                                "<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' autocomplete=off  readonly id='txtTanggalKeluar' name=txt[] value='".$txtVal[1]."' required placeholder='Max. karakter' maxlength='70'>",
                                "<input type='text' class='form-control tp' 'name=txt[] autocomplete=off  readonly id='txtJam' name=txt[] value='".$txtVal[2]."' required placeholder='Max. karakter' maxlength='70'>",
								$cboKaryawan,
								"<input type='text' class='form-control' id='txtIdBarang' name=txt[] value='".$txtVal[4]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' id='txtJumlah' name=txt[] value='".$txtVal[5]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								
								"<input type='text' class='form-control' id='txtCatatan' name=txt[] value='".$txtVal[6]."' required placeholder='Max. 70 karakter' maxlength='70'>"
								
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
	
	}
	


?>