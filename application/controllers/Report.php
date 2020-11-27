<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller 
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
	
	var $mainTable="tb_mahasiswa";
	var $mainPk="id_mahasiswa";
	var $viewLink="Report";
	// var $viewLink2="Users";
	//sub menu atau header
	var $breadcrumbTitle="Daily Report";
	//var $breadcrumbTitle2="User Access";
	// buat tampilan view data
	var $viewPage="Admviewpage";
	//buat view tambah data
	var $addPage="Admaddpage";
	//var $detPage="Formdetpage";
	
	//query
	var $ordQuery=" ORDER BY id_mahasiswa DESC ";
	var $tableQuery="tb_mahasiswa";
					
	var $fieldQuery="
						id_mahasiswa,
						tanggal_mulai,
                        pokok_bahasan,
                        subpokok_bahasan,
                        foto_scrum,
                        file_mahasiswa
						
						"; //leave blank to show all field
						
	var $primaryKey="id_mahasiswa";
	//var $detKey="nik";
	var $updateKey="id_mahasiswa";
	
	//auto generate id
	//sesuaikan panjangnya length di database
	var $defaultId="MHS0001";
	var $prefix="MHS";
	var $suffix="0001";	
	
	//view
	var $viewFormTitle="Daily Report";
	var $viewFormTableHeader=array(
									"Id Mahasiswa",
									"Tanggal Mulai",
									"Pokok Bahasan",
                                    "Sub Pokok Bahasan",
                                    "Foto",
									"File"
									
									);
	
	//save
	var $saveFormTitle="New Daily Report";
	var $saveFormTableHeader=array(
                                    "Id Mahasiswa",
                                    "Tanggal Mulai",
                                    "Pokok Bahasan",
                                    "Sub Pokok Bahasan",
                                    "Foto",
                                    "File"
									);
	
	//update
	var $editFormTitle="Daily Report";
	
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
            $row->foto_scrum="<img src='".base_url()."assets/foto/".$row->foto_scrum."' height='auto' width='100px' >";
			$row->file_mahasiswa="<a href='".base_url()."assets/file/".$row->file_mahasiswa."' >".$row->file_mahasiswa."</a>";
		
				
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
			<img src='".base_url()."/assets/foto/".$txtVal[4]."' height='200px' width='auto' >
			<input type='hidden' name='txtfl' value='".$txtVal[4]."'>";


			$fileTemp="<h5><i>Click browse to change file</i></h5>
			<a href='".base_url()."/assets/file/".$txtVal[5]."'>
			<input type='hidden' name='txtfd' value='".$txtVal[5]."'>";

			
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
	// $cboJK=$this->fn->createCbo(array('Laki-laki','Perempuan'),array('Laki-laki','Perempuan'),$txtVal[5]);
	
		
			
		$output['formTxt']=array(
								"<input type='text' class='form-control' id='txtIdMahasiswa' name=txt[] value='".$txtVal[0]."' required readonly placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' autocomplete=off id='txtTanggalMulaiMahasiswa' name=txt[] value='".$txtVal[1]."' required readonly placeholder='Max. 70 karakter' maxlength='70'>",
								"<input type='text' class='form-control' autocomplete=off id='txtPokokBahasan' name=txt[] value='".$txtVal[2]."' required placeholder='Max. 70 karakter'>",
                                "<textarea class='form-control summernote'  id='txtid1' name=txt[] >".$txtVal[3]."</textarea>",
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
	

	
}

?>