<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangmasuk extends CI_Controller 
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
	
	var $mainTable="tb_barangmasuk";
	var $mainPk="id_barang_masuk";
	var $viewLink="Barangmasuk";
	// var $viewLink2="Users";
	//sub menu atau header
	var $breadcrumbTitle="Daftar ATK Masuk";
	//var $breadcrumbTitle2="User Access";
	// buat tampilan view data
	var $viewPage="Admviewpage";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_barang_masuk DESC ";
	var $tableQuery= 	"tb_barangmasuk AS a 
						INNER JOIN tb_detailmasuk AS b ON  b.id_barang_masuk = a.id_barang_masuk					
						INNER JOIN tb_barang AS c ON c.id_barang = b.id_barang
										
						";
	var $fieldQuery="
						a.id_barang_masuk,
						c.des_barang,
						a.tanggal_masuk,
						b.jam,
					    b.jumlah_masuk,
						b.satuan,
						b.jenis,
						a.bukti_terima
						"; //leave blank to show all field
						
	var $primaryKey="id_barang_masuk";
	//var $detKey="nik";
	var $updateKey="a.id_barang_masuk";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	var $defaultId="TBM0001";
	var $prefix="TBM";
	var $suffix="0001";	
	
	//view
	var $viewFormTitle="Data ATK Masuk";
	var $viewFormTableHeader=array(
									"Id Transaction",
									"Description Product",
									"Date",
									"Time",
                                    "Quantity",
									"Unit",
									"Type Order",																
									//"Catatan",
									"Picture"
									);
	
	//save
	var $saveFormTitle="Tambah ATK Masuk";
	var $saveFormTableHeader=array(
									"Id Transaction",
									"Description Product",
									"Date",
									"Time",
									"Quantity",
									"Unit",
									"Type Order",																
									//"Catatan",
									"Picture"
									);
	
	//update
	var $editFormTitle="Ubah Data ATK Masuk";
	
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
			$row->bukti_terima="<img src='".base_url()."assets/img/".$row->bukti_terima."' height='auto' width='100px' >";

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

			//menambahakan foto
			$imgTemp="<h5><i>Click browse to change image</i></h5>
			<img src='".base_url()."/assets/poto/".$txtVal[7]."' height='200px' width='auto'>
			<input type='hidden' name='txtfl' value='".$txtVal[7]."'>";
			
		}
		else
		{	
				for($i=0;$i<count($this->saveFormTableHeader);$i++)
				{
					$txtVal[]="";//$this->saveFormTableHeader[$i];
				}	
				
				//generate id
				$txtVal[0]=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
				$txtVal[2] = date("Y-m-d");
				$txtVal[3] = date("H:i:s", time()+(60*60*6));
				$imgTemp="<input type='hidden' name='txt[]' value='".$txtVal[7]."'>";
	
		}
		
		// $cboacc=$this->fn->createCbofromDb("tb_acc","id_acc as id,nm_acc as nm","",$txtVal[58],"","txtUser[]");
		// Combobox gabungan
		$cboID=$this->fn->createCbofromDb("tb_barang","id_barang as id,des_barang as nm","",$txtVal[1],"","txt[]");
		
		// combobox statis
		$cboSatuan=$this->fn->createCbo(array('Pcs','Box','Unit'),array('Pcs','Box','Unit'),$txtVal[5]);
		$cboJenis=$this->fn->createCbo(array('Stok awal','Stok akhir'),array('Stok awal','Stok akhir'),$txtVal[6]);
			
		$output['formTxt']=array(
								"<input type='text' class='form-control' id='txtIdBarangMasuk' name=txt[] value='".$txtVal[0]."' required readonly placeholder='Max. 7 karakter' maxlength='70'>",
								$cboID,
								"<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' autocomplete=off  readonly id='txtTanggalMasuk' name=txt[] value='".$txtVal[2]."' required placeholder='Max. karakter' maxlength='70'>",
								"<input type='text' class='form-control tp' 'name=txt[] autocomplete=off  readonly id='txtJam' name=txt[] value='".$txtVal[3]."' required placeholder='Max. karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtJumlahMasuk' name=txt[] value='".$txtVal[4]."' required placeholder='' maxlength='70'>",
								$cboSatuan,
								$cboJenis,
								//"<input type='text' class='form-control' id='txtCatatan' name=txt[] value='".$txtVal[7]."' required placeholder='Ex: Masuk senin etc.' maxlength='20'>",
								$imgTemp."<input type='file' class='form-control fileupload' id='txtid23' name=txtfl >"
									
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
		$imgTemp=$this->input->post('txtfl');

		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
		//echo implode("<br>",$savValTemp); //show data inputan.. tapi polos

		//update stok
		$stoklama = $this->Mmain->qRead("tb_barang WHERE id_barang = '".$savValTemp[1]."' ","stok_barang","")->row()->stok_barang;
		$stokbaru = $stoklama + $savValTemp[4];
		
		//foto
		$avauser="";
		if(!empty($_FILES['txtfl']['name']))
				{
		$flName=$_FILES['txtfl']['name'];
		$flTmp=$_FILES['txtfl']['tmp_name'];
		$fltype=$_FILES['txtfl']['type'];
		move_uploaded_file($flTmp,"assets/img/".$flName);
		$avauser=$flName;
				}
		else
				{
						$avauser="def.jpg";
				}
		$savValTemp[7]=$avauser;
		//$this->Mmain->qIns($this->mainTable,$savValTemp);
		

		//barang masuk di sesuaikan arraynya dengan di form barang masuk
		$bahanSimpanMasuk = Array(
										$savValTemp[0], //id brg masuk
										$savValTemp[2], //tgl masuk																	
										//$savValTemp[7], //catatan										
										$savValTemp[7] //bukti foto sebelumnya 8
									);
		$this->Mmain->qIns($this->mainTable,$bahanSimpanMasuk);
									
		//detail masuk sama di atas
		$bahanSimpanMasukDetail = Array(
			$savValTemp[0],		//id brg masuk
			$savValTemp[1],		//id brg
			$savValTemp[4],		//jumlah
			$savValTemp[5],		//satuan
			$savValTemp[6],		//jenis
			$savValTemp[3]		//jam
		);

		$this->Mmain->qIns("tb_detailmasuk",$bahanSimpanMasukDetail);

		
		//menampilkan foto
		$avauser="";
		if(!empty($_FILES['txtfl']['name']))
		{
			$flName=$_FILES['txtfl']['name'];
			$flTmp=$_FILES['txtfl']['tmp_name'];
			$fltype=$_FILES['txtfl']['type'];
			move_uploaded_file($flTmp,"assets/img/".$flName);
			$avauser=$flName;
		}
		else
		{
			$avauser="def.jpg";
		}
		$savValTemp[]=$avauser;
		//ubah stok
		$this->Mmain->qUpdPart("tb_barang","id_barang",$savValTemp[1],Array("stok_barang"),Array($stokbaru));


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
		//retrieve values
		$savValTemp=$this->input->post('txt');
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
		//update foto
		$avauser="";
		 if(!empty($_FILES['txtfl']['name']))
		 {
		 	$flName=$_FILES['txtfl']['name'];
		 	$flTmp=$_FILES['txtfl']['tmp_name'];
		 	$fltype=$_FILES['txtfl']['type'];
		 	move_uploaded_file($flTmp,"assets/img/".$flName); 
			$avauser=$flName;
			 
		 }
		 else
		 {
			 $avauser=$this->input->post('txtfl');
		 }
		
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		$this->session->set_flashdata('successNotification', '2');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	
	
}

?>
