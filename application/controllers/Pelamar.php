<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller 
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
	
	var $mainTable="tb_pelamar";
	var $mainPk="id_pelamar";
	var $viewLink="Pelamar";
	// var $viewLink2="Users";
	//sub menu atau header
	var $breadcrumbTitle="Data Pelamar";
	//var $breadcrumbTitle2="User Access";
	// buat tampilan view data
	var $viewPage="Admviewpage";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_pelamar DESC ";
	var $tableQuery="tb_pelamar AS a
					INNER JOIN tb_cr AS b ON a.loker_pelamar = b.id_cr";
	var $fieldQuery="
						a.id_pelamar,
						a.tgldaftar_pelamar,
						a.nama_pelamar,
						a.tgllahir_pelamar,
						a.umur_pelamar,
						a.jk_pelamar,
						a.alamat_pelamar,
						a.kota_pelamar,
						a.agama_pelamar,
						a.nohp_pelamar,
						a.status_pelamar,
						a.pdkterakhir_pelamar,
						a.jurusan_pelamar,
						a.nilai_pelamar,
						a.asalsekolah_pelamar,
						a.prestasi_pelamar,
						a.keahlian_pelamar,
						a.pengalamankerja_pelamar,
						b.title_cr,
						a.statuslowongan_pelamar as stat,
						a.tahapan_pelamar as thp,
						a.notes_pelamar,
						a.Foto_pelamar,
						a.file_pelamar
						
						"; //leave blank to show all field
						
	var $primaryKey="id_pelamar";
	//var $detKey="nik";
	var $updateKey="id_pelamar";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	var $defaultId="PLM0001";
	var $prefix="PLM";
	var $suffix="0001";	
	
	//view
	var $viewFormTitle="Data Pelamar";
	var $viewFormTableHeader=array(
									"Id Pelamar",
									"Tanggal Daftar",
									"Nama",
									"Tanggal Lahir",
									"Umur",
									"Jenis Kelamin",
									"Alamat",
									"Kota",
									"Agama",
									"No.Hp",
									"Status",
									"Pendidikan Terakhir",
									"Jurusan",
									"Nilai",
									"Asal Sekolah/Universitas",
									"Prestasi",
									"Keahlian",
									"Pengalaman Kerja",
									"Loker",
									"Status Lowongan",
									"Tahapan",
									"Notes",
									"Foto",
									"File"
									
									);
	
	//save
	var $saveFormTitle="Tambah Pelamar";
	var $saveFormTableHeader=array(
									"Id Pelamar",
									"Tanggal Daftar",
									"Nama",
									"Tanggal Lahir",
									"Umur",
									"Jenis Kelamin",
									"Alamat",
									"Kota",
									"Agama",
									"No.Hp",
									"Status",
									"Pendidikan Terakhir",
									"Jurusan",
									"Nilai",
									"Asal Sekolah/Universitas",
									"Prestasi",
									"Keahlian",
									"Pengalaman Kerja",
									"Loker",
									"Status Lowongan",
									"Tahapan",
									"Notes",
									"Foto",
									"File"
									);
	
	//update
	var $editFormTitle="Ubah Data Pelamar";
	
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
		
		//foto
		
		//init view
		$output['formAccess']=$access;
		
		$renderTemp=$this->Mmain->qRead($this->tableQuery.$this->ordQuery,$this->fieldQuery,"");
		foreach($renderTemp->result() as $row)
		{
			$row->Foto_pelamar="<img src='".base_url()."assets/foto/".$row->Foto_pelamar."' height='auto' width='100px' >";
			$row->file_pelamar="<a href='".base_url()."assets/file/".$row->file_pelamar."' >".$row->file_pelamar."</a>";
		
			//$row->thp = "<a href='' class='btn btn-primary'>Tahapan</a>";
		
			if($row->stat == "open")
				$row->stat = "<a href='".site_url()."Pelamar/ubah/".$row->id_pelamar."/close' class='btn btn-danger'>Close</a>";
				else
				$row->stat = "<a href='".site_url()."Pelamar/ubah/".$row->id_pelamar."/open' class='btn btn-primary'>Open</a>";
		


			// if($row->thp == "mendaftar")
			// 	$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/uploadberkas' class='btn btn-primary'>upload berkas</a>";
			// 	else
			if($row->thp == "mendaftar")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/interview1' class='btn btn-primary'>interview 1</a>";
				else
			if($row->thp == "interview1")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/interview2' class='btn btn-primary'>interview 2</a>";
				else
			if($row->thp == "interview2")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/tesexcel' class='btn btn-primary'>tesexcel</a>";
				else	
			if($row->thp == "tesexcel")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/testulis' class='btn btn-primary'>tes tulis</a>";
				else
			if($row->thp == "testulis")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/psikotes' class='btn btn-primary'>psikotes</a>";
				else
			if($row->thp == "psikotes")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/interview3' class='btn btn-primary'>interview 3</a>";
				else
			if($row->thp == "interview3")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/diterima' class='btn btn-primary'>diterima</a>";
				else
			if($row->thp == "diterima")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/gagal' class='btn btn-danger'>gagal</a>";
				else
			if($row->thp == "gagal")
				$row->thp = "<a href='".site_url()."Pelamar/ubahtahapan/".$row->id_pelamar."/mendaftar' class='btn btn-primary'>mendaftar</a>";
		


				
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
		$fileTemp="";
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
			//menambahkan foto
			
			$imgTemp="<h5><i>Click browse to change image</i></h5>
			<img src='".base_url()."/assets/foto/".$txtVal[22]."' height='200px' width='auto' >
			<input type='hidden' name='txtfl' value='".$txtVal[22]."'>";

			$fileTemp="<h5><i>Click browse to change file</i></h5>
			<a href='".base_url()."/assets/file/".$txtVal[23]."'>
			<input type='hidden' name='txtfd' value='".$txtVal[23]."'>";

			
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
				//$txtVal[3] = "asds";
				//$txtVal[4] = "nava";	
			
		}
		//combobox dinamis dan statis
		//$cboacc=$this->fn->createCbofromDb("tb_acc","id_acc as id,nm_acc as nm","",$txtVal[58],"","txtUser[]");
	$cboJK=$this->fn->createCbo(array('Laki-laki','Perempuan'),array('Laki-laki','Perempuan'),$txtVal[5]);
	$cboAgama=$this->fn->createCbo(array('Islam','Kristen','Katholik','Hindu','Budha','Kong Hu Chu'),array('Islam','Kristen','Katholik','Hindu','Budha','Kong Hu Chu'),$txtVal[8]);	
	$cboStatus=$this->fn->createCbo(array('Single','Married'),array('Single','Married'),$txtVal[10]);
	$cboStatusLowongan=$this->fn->createCbo(array('Open'),array('Open'),$txtVal[19]);
	$cboTahapan=$this->fn->createCbo(array('Mendaftar','Gagal'),array('Mendaftar','Gagal'),$txtVal[20]);
	$cboPendidikanTerakhir=$this->fn->createCbo(array('SD','SMP','SMA/MA','SMK','D1','D2','D3','D4','S1','S2','S3'),array('SD','SMP','SMA/MA','SMK','D1','D2','D3','D4','S1','S2','S3'),$txtVal[11]);

	$cboLoker=$this->fn->createCbofromDb("tb_cr","id_cr as id, title_cr as nm","",$txtVal[18],"","txt[]");
		
			
		$output['formTxt']=array(
								"<input type='text' class='form-control' id='txtIdPelamar' name=txt[] value='".$txtVal[0]."' required readonly placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' autocomplete=off id='txtTglDaftarPelamar' name=txt[] value='".$txtVal[1]."' required readonly placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtNamaPelamar' name=txt[] value='".$txtVal[2]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' autocomplete=off id='txtTglLahirPelamar' name=txt[] value='".$txtVal[3]."' required readonly placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtUmurPelamar' name=txt[] value='".$txtVal[4]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								$cboJK,
								"<input type='text' class='form-control' autocomplete=off id='txtAlamatPelamar' name=txt[] value='".$txtVal[6]."' required placeholder'>",
								"<input type='text' class='form-control' autocomplete=off id='txtKotaPelamar' name=txt[] value='".$txtVal[7]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								$cboAgama,
								"<input type='text' class='form-control' autocomplete=off id='txtNoHpPelamar' name=txt[] value='".$txtVal[9]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								$cboStatus,
								$cboPendidikanTerakhir,
								"<input type='text' class='form-control' autocomplete=off id='txtJurusanPelamar' name=txt[] value='".$txtVal[12]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtNilaiPelamar' name=txt[] value='".$txtVal[13]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtAsalSekolah/UniversitasPelamar' name=txt[] value='".$txtVal[14]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtPrestasiPelamar' name=txt[] value='".$txtVal[15]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtKeahlianPelamar' name=txt[] value='".$txtVal[16]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtPengalamanKerjaPelamar' name=txt[] value='".$txtVal[17]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								$cboLoker,
								$cboStatusLowongan,
								$cboTahapan,
								"<input type='text' class='form-control' autocomplete=off id='txtNotesPelamar' name=txt[] value='".$txtVal[21]."' required placeholder='Max. 70 karakter' maxlength='70'>",
								$imgTemp."<input type='file' class='form-control fileupload' id='txtid23' name=txtfl >",
								$fileTemp."<input type='file' class='form-control fileupload' id='txtid23' name=txtfd >"
								
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
//menampilakan foto
		$avauser="";
		if(!empty($_FILES['txtfl']['name']))
		{
			$flName=$_FILES['txtfl']['name'];
			$flTmp=$_FILES['txtfl']['tmp_name'];
			$fltype=$_FILES['txtfl']['type'];
			move_uploaded_file($flTmp,"assets/foto/".$flName);
			$avauser=$flName;
		}
		else
		{
			$avauser="def.jpg";
		}
		$savValTemp[]=$avauser;

		if(!empty($_FILES['txtfd']['name']))
		{
			$flName=$_FILES['txtfd']['name'];
			$flTmp=$_FILES['txtfd']['tmp_name'];
			$fltype=$_FILES['txtfd']['type'];
			move_uploaded_file($flTmp,"assets/file/".$flName);
			$avauser=$flName;
		}
		else
		{
			$avauser="";
		}
		$savValTemp[]=$avauser;
		//echo implode("<br>",$savValTemp);
		//foreach($savValTemp as $i=>$dt) echo ($i) . " " . $dt."<br>";
		$savValTemp[0]=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
			
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
//update foto	
		 $avauser="";
		 if(!empty($_FILES['txtfl']['name']))
		 {
		 	$flName=$_FILES['txtfl']['name'];
		 	$flTmp=$_FILES['txtfl']['tmp_name'];
		 	$fltype=$_FILES['txtfl']['type'];
		 	move_uploaded_file($flTmp,"assets/foto/".$flName); 
			$avauser=$flName;
			 
		 }
		 else
		 {
			 $avauser=$this->input->post('txtfl');
		 }

		 
		 $savValTemp[]=$avauser;
		if(!empty($_FILES['txtfd']['name']))
		{

			$flName=$_FILES['txtfd']['name'];
			$flTmp=$_FILES['txtfd']['tmp_name'];
			$fltype=$_FILES['txtfd']['type'];
			move_uploaded_file($flTmp,"assets/file/".$flName); 
			$avauser=$flName;
		 }
		 
		else
		{
			 $avauser=$this->input->post('txtfd');
		 }
		
		 $savValTemp[]=$avauser;
	
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		$this->session->set_flashdata('successNotification', '2');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	
	public function ubah($id, $status)
	{
	
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
		$this->Mmain->qUpdPart("tb_pelamar","id_pelamar",$id,Array("statuslowongan_pelamar"),Array($status));
		//redirect to form
		redirect($this->viewLink,'refresh');	
	}

	public function ubahtahapan($id, $tahapan)
	{
	
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
		$this->Mmain->qUpdPart("tb_pelamar","id_pelamar",$id,Array("tahapan_pelamar"),Array($tahapan));
		//redirect to form
		redirect($this->viewLink,'refresh');	
	}
	
}

?>