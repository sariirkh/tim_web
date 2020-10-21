<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cr extends CI_Controller 
{
	public function __construct()
	 {
		parent::__construct();			
		$this->load->library('Commonfunction','','fn');
		
		if(!isset($this->session->userdata['name']))		
			redirect("login","refresh");
	 }
	/*	
		====================================================== Variable Declaration =========================================================
	*/
	
	var $mainTable="tb_cr";
	var $mainPk="id_cr";
	var $viewLink="Cr";
	var $breadcrumbTitle="Career";
	var $viewPage="Admviewpage";
	var $addPage="Admaddpage";
	
	//query
	var $ordQuery=" ORDER BY ord ";
	var $tableQuery="
					tb_cr a
					";
	var $fieldQuery="
					a.title_cr,
					a.content_cr,
					a.img_cr as img,
					a.order_cr as ord,
					a.status_cr as st,
					a.id_cr as id
					";
	var $primaryKey="id";
	var $updateKey="id_cr";
	
	//auto generate id
	var $defaultId="CR01";
	var $prefix="CR";
	var $suffix="01";	
	
	//view
	var $viewFormTitle="Career";
	var $viewFormTableHeader=array("Title","Content","Image","Publish Order","Status");
	
	//save
	var $saveFormTitle="Add new career";
	var $saveFormTableHeader=array("Title","Content","Image","Publish Order","Status");
	
	//update
	var $editFormTitle="Edit features";
	
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
		
		//$output['isall']=$access->isadd;
		$accessQuery="";
		if($access->acc1<>1)
			$accessQuery="WHERE b.code_user ='".$this->session->userdata['codeUser']."'";
			
			
		
		//init view
		$output['formAccess']=$access;
		
		$renderTemp=$this->Mmain->qRead($this->tableQuery.$this->ordQuery,$this->fieldQuery,"");
		foreach($renderTemp->result() as $row)
		{
			//check whether status is active or not
			if($row->st=='Inactive')
			{				
				if($access->acc1<>1)
				{
					$row->st="<span class='label label-primary'>Not Published</span>";	
				}
				else
				{
					$row->st="<a href='".site_url()."/Cr/Approve/".$row->id."/Active' title='Publish features?'><button class='btn btn-success btn-flat'>Publish</button></a>";					
				}
			
			}				
			elseif($row->st=='Active')
			{
					$row->st="<a href='".site_url()."/Cr/Approve/".$row->id."/Inactive' title='Hide features?'><button class='btn btn-danger btn-flat'>Hide</button></a>";		
			}	

			//check whether user has access to change order	
			$row->img = "<img src='".base_url()."assets/landing/img/".$row->img."' height='50px'>";
			if($access->acc1 == 1)
			{
				$tempOrder="";
				if($row->ord == 1 )
				$tempOrder = "<a   class='btn btn-default btn-flat btn-xs' disabled><i class='fa fa-chevron-up fa-xs'></i></a>&nbsp;&nbsp;";
				else
				$tempOrder = "<a href='".site_url()."Cr/Changeorder/".$row->id."/".$row->ord."/up'  class='btn btn-success btn-flat btn-xs'><i class='fa fa-chevron-up fa-xs'></i></a>&nbsp;&nbsp;";
				
				$tempOrder .= $row->ord ;
							
							
				if($row->ord == $renderTemp->num_rows() )
				$tempOrder .= "&nbsp;&nbsp;<a href='#' class='btn btn-default btn-flat btn-xs' disabled><i class='fa fa-chevron-down fa-xs'></i></a>" ;
				else
				$tempOrder .= "&nbsp;&nbsp;<a href='".site_url()."Cr/Changeorder/".$row->id."/".$row->ord."/down' class='btn btn-danger btn-flat btn-xs'><i class='fa fa-chevron-down fa-xs'></i></a>" ;
						
				$row->ord = $tempOrder;
			}
		}
		$output['render']=$renderTemp;
		
		//init view
		$output['pageTitle']=$this->viewFormTitle;
		$output['breadcrumbTitle']=$this->breadcrumbTitle;
		$output['breadcrumbLink']=$this->viewLink;
		$output['saveLink']=$this->viewLink."/add";
		$output['deleteLink']=$this->viewLink."/delete";
		$output['primaryKey']=$this->primaryKey;
		$output['tableHeader']=$this->viewFormTableHeader;
		
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
		$codeTemp = "";
		if(!empty($isEdit))
		{
			
			$output['pageTitle']=$this->editFormTitle;
			$output['saveLink']=$this->viewLink."/update";
			$pid=$isEdit;
			$render=$this->Mmain->qRead($this->tableQuery,$this->fieldQuery," ".$this->mainPk." = '".$pid."'");
			foreach($render->result() as $row)
			{
				foreach($row as $col)
				{
					$txtVal[]= $col;
				}
			}
				$newId = $pid;
				$cbostat=$this->fn->createCbo(array("Active","Inactive"),array("Active","Inactive"),$txtVal[4],"");
				
				$imgTemp="<h5><i>Click browse to change image</i></h5>
							<img src='".base_url()."assets/landing/img/".$txtVal[2]."' height='200px' width='auto' >
							<input type='hidden' name='txt[]' value='".$txtVal[2]."'>";
		}
		else
		{	
				for($i=0;$i<count($this->saveFormTableHeader);$i++)
				{
					$txtVal[]="";
				}	
				
				//generate id
				$newId=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
				$txtVal[3] = $this->Mmain->qRead($this->mainTable)->num_rows() +1;
				$cbostat=$this->fn->createCbo(array("Active","Inactive"),array("Active","Inactive"),$txtVal[4],"");
				$imgTemp="<input type='hidden' name='txt[]' value='".$txtVal[2]."'>";
		}
		$output['formTxt']=array(
								"<input type='hidden' class='form-control' id='txtid0' name=txt[] value='".$newId."' readonly>" . 
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[0]."' required>",
								"<textarea class='form-control summernote'  id='txtid1' name=txt[] >".$txtVal[1]."</textarea>",
								$imgTemp."<input type='file' class='form-control fileupload' id='txtid23' name=txtfl >",
								"<input type='number' class='form-control' id='txtid1' name=txt[] value='".$txtVal[3]."' required readonly>",
								$cbostat
								);
		
		
		//render view
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
		$avauser="";
		if(!empty($_FILES['txtfl']['name']))
		{
			$flName=$_FILES['txtfl']['name'];
			$flTmp=$_FILES['txtfl']['tmp_name'];
			$fltype=$_FILES['txtfl']['type'];
			move_uploaded_file($flTmp,"assets/landing/img/".$flName);
			$avauser=$flName;
		}
		else
		{
			$avauser="def.jpg";
		}
		$savValTemp[3] = $avauser;
		
		//echo count($savValTemp);
		//echo implode("<br>",$savValTemp);
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
		$avauser="";
		if(!empty($_FILES['txtfl']['name']))
		{
			$flName=$_FILES['txtfl']['name'];
			$flTmp=$_FILES['txtfl']['tmp_name'];
			$fltype=$_FILES['txtfl']['type'];
			move_uploaded_file($flTmp,"assets/landing/img/".$flName);
			$avauser=$flName;
		}
		else
		{
			$avauser=$savValTemp[3];
		}
		$savValTemp[3] = $avauser;
		
		
		//echo implode("<br>",$savValTemp);
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		$this->session->set_flashdata('successNotification', '2');
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}

	
	//update record
	public function Approve($id,$acc)
	{
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		$this->Mmain->qUpdpart($this->mainTable,$this->mainPk,$id,Array("status_cr"),Array($acc));
		
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}	
	
	
	//update record
	public function Changeorder($id,$oldOrder,$command)
	{
		$newOrder = ($command == "down" ? $oldOrder + 1 :  $oldOrder - 1);
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		//echo $oldOrder;
		//echo $newOrder;
		$this->Mmain->qUpdpart($this->mainTable,"order_cr",$newOrder,Array("order_cr"),Array($oldOrder));
		$this->Mmain->qUpdpart($this->mainTable,$this->mainPk,$id,Array("order_cr"),Array($newOrder));
		
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}	
	
}

?>