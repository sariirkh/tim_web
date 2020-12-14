<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangkeluar extends CI_Controller 
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
	
	var $mainTable="tb_barangkeluar";
	var $mainPk="id_barang_keluar";
	var $viewLink="Barangkeluar";
	// var $viewLink2="Users";
	//sub menu atau header
	var $breadcrumbTitle="Daftar ATK Keluar";
	//var $breadcrumbTitle2="User Access";
	// buat tampilan view data
	var $viewPage="Admviewpage";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_barang_keluar DESC ";
	var $tableQuery=
						"tb_barangkeluar AS a 
						INNER JOIN tb_detailkeluar AS b ON a.id_barang_keluar = b.id_barang_keluar
						INNER JOIN tb_barang AS c ON b.id_barang = c.id_barang
						INNER JOIN tb_karyawan AS d ON a.id_karyawan = d.id_karyawan
						";
	var $fieldQuery="
						a.id_barang_keluar,
						c.des_barang,
						a.tanggal_keluar,
						b.jam,
					    b.jumlah_keluar,
						d.nama_karyawan,
						a.catatan,
						a.ttd
						
						"; //leave blank to show all field
						
	var $primaryKey="id_barang_keluar";
	//var $detKey="nik";
	var $updateKey="a.id_barang_keluar";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	var $defaultId="TBK0020";
	var $prefix="TBK";
	var $suffix="0020";	
	
	//view
	var $viewFormTitle="Daftar ATK Keluar";
	var $viewFormTableHeader=array(
									"Id Transaction",
									"Product Description",
									"Date",
									"Time",
									"Quantity",
									"Employee Name",
									"Note",
									"Signature"									
									);
	
	//save
	var $saveFormTitle="Tambah ATK Keluar";
	var $saveFormTableHeader=array(
									"Id Transaction",
									"Product Description",
									"Date",
									"Time",
									"Quantity",
									"Employee Name",
									"Note",
									"Signature"	
									);
	
	//update
	var $editFormTitle="Ubah Data ATK Keluar";
	
	
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
		//echo $access->isadd . " cari";
		//$output['isall']=$access->isadd;
		$accessQuery="";
		//$access=$isAll;
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
			//$row->ttd="<img src='".base_url()."assets/foto_ttd/".$row->ttd."' height='auto' width='100px' >";

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
			/*
			$imgTemp="<h5><i>Click browse to change image</i></h5>
			<img src='".base_url()."/assets/poto/".$txtVal[7]."' height='200px' width='auto'>
			<input type='hidden' name='txtfl' value='".$txtVal[7]."'>";
			*/
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
				
	
		}

		// $cboacc=$this->fn->createCbofromDb("tb_acc","id_acc as id,nm_acc as nm","",$txtVal[58],"","txtUser[]");
		//Combobox gabungan
		$cboID=$this->fn->createCbofromDb("tb_barang","id_barang as id, des_barang as nm","",$txtVal[1],"id='cboBarang'","txt[]");
		$cboKaryawan=$this->fn->createCbofromDb("tb_karyawan","id_karyawan as id, nama_karyawan as nm","",$txtVal[5],"","txt[]");
		$wherebrg = $this->Mmain->qRead("tb_barang","id_barang","stok_barang","");
		
		$output['formTxt']=array(
								"<input type='text' class='form-control' id='txtIdBarangKeluar' name=txt[] value='".$txtVal[0]."' required readonly placeholder='Max. karakter' maxlength='70'>",
								$cboID,
								"<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' autocomplete=off  readonly id='txtTanggalKeluar' name=txt[] value='".$txtVal[2]."' required placeholder='Max. karakter' maxlength='70'>",
								"<input type='text' class='form-control tp' 'name=txt[] autocomplete=off  readonly id='txtJam' name=txt[] value='".$txtVal[3]."' required placeholder='Max. karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtJumlahKeluar' name=txt[] value='".$txtVal[4]."' required placeholder='' maxlength='70'>",
								$cboKaryawan,
								"<input type='text' class='form-control' id='txtCatatan' name=txt[] value='".$txtVal[6]."' required placeholder='Ex: Untuk office etc.' maxlength='20'>",
								"<input type='hidden' class='form-control' id='txtsignpad' name=txtTtd   required >
									<br>
									<canvas id='signature-pad' class='signature-pad' width=auto height=200 style='border:1px solid lightgrey'></canvas>"
								
								
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
		$ttd=$this->input->post('txtTtd');
		//$imgTemp=$this->input->post('txtfl');
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');

		// $wherebrg = array('id_barang' => $id);
		// $data['stoksisa'] = $this->db->get_where('tb_detailkeluar',$wherebrg)->result();

		echo implode("<br>",$savValTemp); //show value tapi polos
		//update stok keluar
		
		$stoklama = $this->Mmain->qRead("tb_barang WHERE id_barang = '".$savValTemp[1]."' ","stok_barang","")->row()->stok_barang;
		$stokbaru = $stoklama - $savValTemp[4];

		//menyimpan ttd sebagai gambar di local
		$simpanTtd="";
		if($ttd <> "")  
		{
			$splited = explode(',', substr( $ttd , 5 ) , 2);
			$simpanTtd="sign_".date("YmdHis")."_".$savValTemp[0].".png";
			$mime=$splited[0];
			$data=$splited[1];
			file_put_contents("assets/foto_ttd/".$ttd[1],base64_decode($data));
		}
		$savValTemp[7] = $simpanTtd; 


		//barang keluar di sesuaikan arraynya dengan di form barang keluar
		$bahanSimpanKeluar = Array(
										$savValTemp[0], //id brg keluar
										$savValTemp[2], //tgl keluar	
										$savValTemp[5], //nama karyawan															
										$savValTemp[6], //catatan
										$savValTemp[7], //ttd
									);
		$this->Mmain->qIns($this->mainTable,$bahanSimpanKeluar);
					
		//detail keluar sama di atas
		$bahanSimpanKeluarDetail = Array(
			$savValTemp[0],		//id brg keluar
			$savValTemp[1],		//id brg
			$savValTemp[4],		//jumlah keluar
			$savValTemp[3],		//jam
		);

		$this->Mmain->qIns("tb_detailkeluar",$bahanSimpanKeluarDetail);

		//echo $stokbaru;
		// $this->Mmain->qUpdPart("tb_barang", //tabel yang mau dirubah
		// 						"id_barang", //primary key
		// 						$savValTemp[3], //array primary key yg ke berapa
		// 						Array("stok_barang"), //kolom yg mau dirubah
		// 						Array($stokbaru)); //kondisi baru
		
		//menampilkan foto
		/* $avauser="";
		if(!empty($_FILES['txtfl']['name']))
			{
				$flName=$_FILES['txtfl']['name'];
				$flTmp=$_FILES['txtfl']['tmp_name'];
				$fltype=$_FILES['txtfl']['type'];
				move_uploaded_file($flTmp,"assets/poto/".$flName);
				$avauser=$flName;
			}
					else
				{
					$avauser="def.jpg";
				}
			*/

			//echo $ttd;
		
		//$this->Mmain->qIns($this->mainTable,$savValTemp);

		//echo $stokbaru;
		$this->Mmain->qUpdPart("tb_barang", //tabel yang mau dirubah
								"id_barang", //primary key
								$savValTemp[3], //array primary key yg ke berapa
								Array("stok_barang"), //kolom yg mau dirubah
								Array($stokbaru)); //kondisi baru


		
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

		//update ttd
		$simpanTtd="";
		if($ttd <> "")  
		{
			$splited = explode(',', substr( $ttd , 5 ) , 2);
			$simpanTtd="sign_".date("YmdHis")."_".$savValTemp[0].".png";
			$mime=$splited[0];
			$data=$splited[1];
			file_put_contents("assets/foto_ttd/".$ttd[1],base64_decode($data));
		}
		else
		{
			$simpanTtd=$this->input->post('txtTtd');
		}
		
	
		
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		$this->session->set_flashdata('successNotification', '2');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}

	public function ambilstok($id)
	{
		
		$this->load->database();
		$this->load->model('Mmain');

		$brg = $this->Mmain->qRead("tb_barang WHERE id_barang = '".$id."' ","stok_barang","");
		echo $brg->row()->stok_barang;

	}

	public function brgstok($id)
	{
		$this->load->database();
		$this->load->model('Mmain');

		$wherebrg = $this->Mmain->qRead("tb_barang WHERE id_barang => '".$id."'","stok_barang","");
		$data['stoksisa'] = $this->db->get_where('tb_detailkeluar',$wherebrg)->result();
		
	}


	
}

?>
