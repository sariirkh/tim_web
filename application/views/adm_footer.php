
	<?php

// from Product Category 
foreach($setting ->result() as $row)
{
	foreach($row as $rs)
	{
		$dbset[]=$rs;
	}
}
?>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
	  <b>Version</b> 2.0
</div>
	<strong>Copyright &copy; 2016 <a href="#"><?= $dbset[2];?></a>.</strong> All rights reserved.
</footer>


  
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>

</div><!-- ./wrapper -->


<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery-2.1.3.min.js"></script> -->
<!--
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->

<script src="<?php echo base_url();?>assets/landing/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/landing/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/landing/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"></script> -->

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js" ></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.0.0/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/scroll/2.2.0/js/dataTables.scroll.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>


<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/landing/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/landing/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/landing/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/landing/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/landing/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/landing/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/landing/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/landing/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/landing/dist/js/adminlte.js"></script>



<!--
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/dist/js/app.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/dist/js/pages/dashboard2.js"></script>
-->
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/validator/dist/validator.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>assets/js/Chart.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
<!-- All functions-->
<script src="<?php echo base_url();?>assets/admin/iconpicker/dist/js/fontawesome-iconpicker.js" type="text/javascript"></script>
 <script type="text/javascript">       
  $(".iconpicker").iconpicker();	  
</script>

<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>

<script type="text/javascript">   
function validateFileType(){
	var fileName = document.getElementByClass("fileupload").value;
	var idxDot = fileName.lastIndexOf(".") + 1;
	var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
	if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
		//TO DO
	}else{
		alert("Only jpg/jpeg and png files are allowed!");
	}   
}	  
</script>

<!-- script calendar tracking -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script type="text/javascript">
// alert();
try
{
	var kegiatan = [];
	
// kegiatan[0] = { "title"  : 'event1', "start"  : '2019-02-01' , "end" : "2019-02-05"};
// kegiatan[1] = { "title"  : 'event2', "start"  : '2019-02-03'};
	
	
	$.ajax({
	url : "<?= site_url();?>Calendartracking/getKegiatan",
	async : false,
	success : function(s){
		//alert(s);
		if(s != "")
		{
			var dt = s.split("++");
			
			for(var i=0;i<dt.length;i++)
			{
				if(dt[i] != "")
				{
					var detail = dt[i].split("||");
					//alert(detail);
						kegiatan[i] = { "title"  : detail[0],
										"start"  : detail[1] , 
										"end" : detail[1] ,
										"description" : detail[2]};
					
				}
			}
		}
		
	}
	});
	
	$('#calendar').fullCalendar({
		weekNumbers:true,
	selectable: true,
	header: {
		left: 'prev,next today',
		center: 'title',
		right: 'month,agendaWeek,agendaDay'
	},
	dayClick: function(date) {
		//alert('clicked ' + date.format());
	},
	select: function(startDate, endDate) {
		//alert('selected ' + startDate.format() + ' to ' + endDate.format());
	},
	eventRender: function(eventObj, $el) {
		$el.popover({
		title: eventObj.title,
		content: eventObj.description,
		trigger: 'click',
		placement: 'top',
		container: 'body'
		});
	},
		events: kegiatan
	});
	
}
catch(e)
{
	alert(e.message);
}
</script>

<script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
var tanggal = new Date();  
setTimeout("waktu()",1000);  
document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>

<script type="text/javascript">
	
	//setting datatable
	if($(".datatable"))
	var dto = $('.datatable').DataTable({
		"mark"		: true,
		"scrollX"	: true,
		"autowidth"	: false,
		"dom"		: 'Bfrtip',
	"columnDefs": [ {
		orderable: false,
		className: 'select-checkbox',
		targets:   0
	} ],
	"select": {
		style:    'os',
		selector: 'td:first-child'
	},
		"buttons"	:  	{
						   "dom"		: {
							  "button": {
								"tag": "button",
								"className": "btn btn-flat cusDTButton"
							  }
						},
							"buttons" 	: 
							[
								{
									text:      '<i class="fa fa-plus"></i>&nbsp; Add New Data',
									titleAttr: 'Add new data',
									action: function ( e, dt, node, config ) {
										window.location = $("#saveLink").val();
									},
									className : "btn btn-success addButton"
								},
								{
									text:      '<i class="fa fa-plus"></i>&nbsp; Add Multiple Data',
									titleAttr: 'Add Multiple data',
									action: function ( e, dt, node, config ) {
										window.location = $("#saveLink2").val();
									
									},
									className : "btn btn-primary addMultipleButton"
								},
								{
									extend:    'excelHtml5',
									text:      '<i class="fas fa-file-excel text-green"></i>',
									titleAttr: 'Export to Excel',
									className : "btn btn-default"
								},
								{
									extend:    'pdfHtml5',
									text:      '<i class="fas fa-file-pdf text-red"></i>',
									titleAttr: 'Export to PDF',
									className : "btn btn-default"
								},
								{
									extend:    'print',
									text:      '<i class="fas fa-print"></i>',
									titleAttr: 'Print',
									className : "btn btn-default"
								},
								{
									text:      '<i class="fa fa-check"></i>&nbsp; Approve',
									titleAttr: 'Approve Selected Data',
									className : "btn btn-primary approveButton"
								}
							]
						},
		"pageLength": 50,
		// "responsive": 		{
		// 						details: {
		// 						display: $.fn.dataTable.Responsive.display.childRowImmediate,
		// 							renderer: function ( api, rowIdx, columns ) {
		// 								var data = $.map( columns, function ( col, i ) {
		// 									return col.hidden ?
		// 										'<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
		// 											'<td>'+col.title+':'+'</td> '+
		// 											'<td>'+col.data+'</td>'+
		// 										'</tr>' :
		// 										'';
		// 								} ).join('');
						 
		// 								return data ?
		// 									$('<table/>').append( data ) :
		// 									false;
		// 							}
		// 						}
		// 					}
	});
	
	if(!document.getElementById("isApproved")  )
	{
		//alert("as");
		 dto.button('5').remove();
	}
	
	
	$('.approveButton').click(function(){
		//alert();
		//var count = dto.rows( { selected: true } ).count();
		var id=new Array();
		dto.rows( { selected: true }).every(function( rowIdx, tableLoop, rowLoop){
			if($("#txt"+rowIdx).attr('data') != "")
			{
				id[rowIdx]=$("#txt"+rowIdx).attr('data');
				//alert(id);
			}
		});
		
		if(id.length > 0)
		{ 
			var link = $("#isApproved").attr('data');
			//alert(link);
			$.ajax({
				url:"<?= site_url()?>"+link+"/ApproveBatch",
				data:{'id':id},
				method:"POST",
				success:function(s){
					//alert(s);
					
					alert(s)
					if(s=="Approved")
					{
						window.location = "<?= site_url()?>"+link;
					}
				}
			});
		
		}
		
		
	})
	
	$('#btnExportExcel').click(function(){
		//alert();
		  //dto.button('1').remove();
	})
	
	var dtoemp = $('.datatableemp').DataTable({
		
		mark: true,
		"scrollX":true,
		"autowidth":false,
		"select" : true,
		dom: 'Bfrtip',
		"buttons"	:  	{
						   "dom"		: {
							  "button": {
								"tag": "button",
								"className": "btn btn-flat cusDTButton"
							  }
						},
							"buttons" 	: 
							[
								{
									text:      '<i class="fa fa-plus"></i>&nbsp; Add New Data',
									titleAttr: 'Add new data',
									action: function ( e, dt, node, config ) {
										window.location = $("#saveLink").val();
									},
									className : "btn btn-success addButton"
								},
								{
									extend:    'excelHtml5',
									text:      '<i class="fa fa-file-excel"></i>',
									titleAttr: 'Export to Excel',
									className : "btn btn-default "
								},
								{
									extend:    'pdfHtml5',
									text:      '<i class="fa fa-file-pdf"></i>',
									titleAttr: 'Export to PDF',
									className : "btn btn-default"
								},
								{
									extend:    'print',
									text:      '<i class="fa fa-print"></i>',
									titleAttr: 'Print',
									className : "btn btn-default"
								}
							]
						},
		"pageLength": 50,
		rowGroup: {
			// Group by office
			dataSrc: 12
		},
		"responsive": 		{
								details: {
									renderer: function ( api, rowIdx, columns ) {
										var data = $.map( columns, function ( col, i ) {
											return col.hidden ?
												'<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
													'<td>'+col.title+':'+'</td> '+
													'<td>'+col.data+'</td>'+
												'</tr>' :
												'';
										} ).join('');
						 
										return data ?
											$('<table/>').append( data ) :
											false;
									}
								}
							}
	});
	
	//alert($("#saveLink2").val());
	
	if(typeof $("#saveLink").val() === "undefined" ){
		
		//alert(document.getElementById("#saveLink"));
		dto.button('.addButton').remove();
		dtoemp.button('.addButton').remove();
	}
	
	if(typeof $("#saveLink2").val() === "undefined" ){
		
		//alert(document.getElementById("#saveLink"));
		dto.button('.addMultipleButton').remove();
		dtoemp.button('.addMultipleButton').remove();
	}
		
		
		
	$('#next').on( 'click', function () {
		dto.page( 'next' ).draw( 'page' );
	} );
	 
	$('#previous').on( 'click', function () {
		dto.page( 'previous' ).draw( 'page' );
	} );
	
	$("#tp1").on("blur",function(){
		var nowTime =parseInt($("#tp1").val().substr(0,2));
		var untilTime =parseInt($("#tp2").val().substr(0,2));
		if(untilTime<nowTime)
			untilTime+=24;
		var dur=untilTime-nowTime;
		//alert(dur);
		if(dur<1)
			dur=1;
		
		$("#tpdur").val(dur);
		$("#lbltpdur").val(dur+" Hour(s)");
	});
		
	$("#tp2").on("blur",function(){
		var nowTime =parseInt($("#tp1").val().substr(0,2));
		var untilTime =parseInt($("#tp2").val().substr(0,2));
		if(untilTime<nowTime)
			untilTime+=24;
		var dur=untilTime-nowTime;
		//alert(nowTime+""+untilTime);
		if(dur<1)
			dur=1;
		
		$("#tpdur").val(dur);
		$("#lbltpdur").val(dur+" Hour(s)");
	});
	
	
	//set datetimepicker
	$('.dtp').datepicker().on('changeDate',function(ev){	
		//set data duration
		try{
			var dur=$('#dtp2').datepicker().data('datepicker').date.valueOf()-$('#dtp1').datepicker().data('datepicker').date.valueOf();
		if(dur<0 || $('#dtp2').val()=="")
		{
			$('#dur').val("0");
		}
		else
		{
			var lama=(dur/60/60/24/1000)+1;
			$('#dur').val(lama);
			$('#lbldur').val(lama+" Day(s)");		
		}
		}
		catch(err){
			//alert(err.message);
		}
		
		
		
		$('.dtp').datepicker('hide');
	});
	
	//show tooltip
	$('[data-toggle="tooltip"]').tooltip(); 
</script>

<script src="<?php echo base_url();?>assets/admin/select2/select2.full.js"></script>

<script type="text/javascript">

	$(".select2").select2();
</script>

<script src="<?php echo base_url();?>assets/js/clockpicker.js"></script>

<script type="text/javascript">
	
$('.tp').clockpicker({
donetext: 'Done',
placement: 'bottom',
align: 'left',
autoclose: true,
'default': 'now'
});
</script>



<script src="<?php echo base_url();?>assets/admin/fileinput/js/fileinput.js" type="text/javascript"></script>
<script type="text/javascript">
  
	
  $(".fileupload").fileinput();
	
	
  $(".programPicUpload").fileinput();
  
</script>


<script src="<?php echo base_url();?>assets/admin/summernote/dist/summernote.js" type="text/javascript"></script>
<script type="text/javascript">
  
  
		$('.summernote').summernote({
			height: 200,
			onImageUpload: function(files) {
				sendFile(files[0]);
			}
		});

	   function sendFile(file,editor,welEditable) {
		  data = new FormData();
		  data.append("file", file);
		  var urlTmp = "<?php echo site_url(); ?>";
		   $.ajax({
		   url: urlTemp+"/Uploader",
		   data: data,
		   cache: false,
		   contentType: false,
		   processData: false,
		   type: 'POST',
		   success: function(data){
		   alert(data);
			$('.summernote').summernote("insertImage", data, 'filename');
		},
		   error: function(jqXHR, textStatus, errorThrown) {
		   console.log(textStatus+" "+errorThrown);
		  }
		});
	   }
	
  
</script>

<script type="text/javascript">
 
	//$("#notificationAlert").hide();
	
	//delete confirmation
	$('#tblView').on("click",".deleteBtn",function(e) {
		var pid=$(this).attr("name");
		var delLink=$("#deleteSubmit").attr("href")+"/Delete/"+pid;
		$("#deleteSubmit").attr("href",delLink);
	});
 
	//Start confirmation
	$('#tblView').on("click",".startBtn",function(e) {
		var pid=$(this).attr("name");
		//var delLink=$("#startSubmit").attr("href")+"/Start/"+pid;
		//alert(pid);
		$("#frm-confirm-start").attr("action",pid);
	});
	
	//Finish confirmation
	$('#tblView').on("click",".finishBtn",function(e) {
		var pid=$(this).attr("name");
		//var delLink=$("#startSubmit").attr("href")+"/Start/"+pid;
		//alert(pid);
		$("#frm-confirm-finish").attr("action",pid);
	});
	
	//check point confirmation
	$('#tblView').on("click",".checkPointBtn",function(e) {
		var pid=$(this).attr("name");
		//var delLink=$("#startSubmit").attr("href")+"/Start/"+pid;
		//alert(pid);
		$("#frm-checkpoint").attr("action",pid);
	});
 
	//add new data confirmation
	$('#tblView').on("click","#submitBtn",function(e) {
		var pid=$(this).attr("name");
		var delLink=$("#deleteSubmit").attr("href")+"/Save/";
		$("#confirmSubmit").attr("href",delLink);
	});
	
	//add new data confirmation
	$('#tblView').on("click",".signBtn",function(e) {
		var pid=$(this).attr("name");
		$("#txtsignId").val(pid);
		//var delLink=$("#signSubmit").attr("href")+"/saveSign/";
		//$("#confirm-sign").attr("href",delLink);
	});
	
	
	//employee detail
	$('#tblView').on("click",".employeeDetailBtn",function(e) {
		var pid=$(this).attr("name");
	//alert(pid);
		
		$.ajax({
			url : "<?= site_url()?>Users/getEmployeeDetail/" + pid,
			success : function(s){
				//alert(s);
				$("#employee-detail-content").html(s);
			}
		});
		//var delLink=$("#deleteSubmit").attr("href")+"/Save/";
		//$("#confirmSubmit").attr("href",delLink);
	});
	
	$('#submit').click(function(){
		 /* when the submit button in the modal is clicked, submit the form */
		//$("#success-alert").alert();
		$('#formfield').submit();
	});

  

$("#signSubmit").on("click",function(){
	//alert();
	var res = window.confirm("Submit signature?");
	//alert(res);
	if (res == true)
	{
		//alert($(this).attr("name"));
		//$("#txtsignId").val($(this).attr("name"));
		$("#form-mt-sign").submit();
	}
		
});

$("#form-mt-sign").on("submit",function(e){
	var saveData = $(this).serialize();
	//alert(saveData);
	e.preventDefault();
	$.ajax({
		url : "<?= site_url();?>Maintenance/saveSign",
		method:"post",
		data : saveData,
		success : function(s)
		{
			
			//alert(s);
			window.location.reload();
			return false;
		}
		
	});
});
  
//   var yourStartLatLng = new google.maps.LatLng(53.307697, -6.222317);
</script>

<script type="text/javascript">

var year=0;

if($("#year").html())
  year=$("#year").html();

if($("#salesChart"))
  salesChart($("#salesChart").data('id'));
 
function salesChart(codeUser="")
{

$.ajax({
	url:"<?= site_url()?>Admin/getMonthlyRecap/"+year+"/"+codeUser,
	success:function(s)
	{

		//alert(s);
		var label=new Array();
		var data1=new Array();
		var data2=new Array();
		var dataAll=s.split("##");
		var total = new Array(0,0);
		
		var dataReturn=dataAll[1].split("||");
		//last year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			label[i]=dt[0];
			data1[i]=dt[1];
			total[1] += parseInt(dt[1]);
		}
		
		
		dataReturn=dataAll[0].split("||");
		
		//current year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			//label[i]=dt[0];
			data2[i]=dt[1];
			total[0] += parseInt(dt[1]);
		}
		
		
		$("#lrCurrent").html(total[0].toString());
		$("#lrLast").html(total[1].toString());
		
		var ctx = document.getElementById('salesChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: label,
				datasets: [{
					label: 'Current year',
					data: data2,
					backgroundColor: 'rgba(255, 99, 132, 0.2)'
					,
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1
				},{
					label: 'Last year',
					data: data1,
					backgroundColor: 'rgba(54, 162, 235, 0.2)'
					,
					borderColor: 'rgba(54, 162, 235, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				},
			plugins:{
			  labels: 
			  {
				render: 'value',
				fontColor: "black",
				position: 'outside'
			  }
			  
			}
			}
		});
		
	}
	
	});
	
}
</script>

<!-- <script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script> -->


<script type="text/javascript">
//alert("as");
if( $("#lineChart") )
  salesChar2t();
 
function salesChar2t()
{
  //alert("asd");
'use strict';
//-----------------------
//- MONTHLY ABSENCE CHART -
//-----------------------

// Get context with jQuery - using jQuery's .get() method.
//var salesChartCanvas = $("#barChart").get(0).getContext("2d");
// This will get the first returned node in the jQuery collection.
//var salesChart = new Chart(salesChartCanvas);

$.ajax({
	url:"<?= site_url()?>Dashboardtracking/getJumlahperBulan",
	success:function(s)
	{

		//alert(s);
		var label=new Array();
		var data1=new Array();
		//var dataAll=s.split("##");
		
		var dataReturn=s.split("||");
		//last year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			label[i]=dt[0];
			data1[i]=dt[1];
		}
		
		//alert(data1);
		//change label name
		var ctx = document.getElementById('lineChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: label,
				datasets: [{
					label: 'Jumlah Request Rute',
					data: data1,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
						
						
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
		
	},
	error : function(a,b,c)
	{
		alert(c);
	}
});
}

//---------------------------
//- END MONTHLY SALES CHART -
//---------------------------

</script>

<!-- <script type="text/javascript">

if($("#salesChartAttendance").html())
  salesChartAttendance($("#salesChartAttendance").data('id'));
 
function salesChartAttendance(codeUser="")
{
var year=0;

if($("#year").html())
  year=$("#year").html();

$.ajax({
	url:"<?= site_url()?>Admin/getMonthlyAttendanceRecap/"+year+"/"+codeUser,
	success:function(s)
	{

		//alert(s);
		var label=new Array();
		var data1=new Array();
		var data2=new Array();
		var dataAll=s.split("##");
		var total = new Array(0,0);
		
		var dataReturn=dataAll[1].split("||");
		//last year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			label[i]=dt[0];
			data1[i]=dt[1];
			total[1] += parseInt(dt[1]);
		}
		
		
		dataReturn=dataAll[0].split("||");
		
		//current year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			//label[i]=dt[0];
			data2[i]=dt[1];
			total[0] += parseInt(dt[1]);
		}
		
		
		$("#laCurrent").html(total[0].toString());
		$("#laLast").html(total[1].toString());
		
		var ctx = document.getElementById('salesChartAttendance').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: label,
				datasets: [{
					label: 'Current year',
					data: data2,
					backgroundColor: 'rgba(255, 99, 132, 0.2)'
					,
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1
				},{
					label: 'Last year',
					data: data1,
					backgroundColor: 'rgba(54, 162, 235, 0.2)'
					,
					borderColor: 'rgba(54, 162, 235, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
		
	}
	
	});
	
}
</script> -->

<script type="text/javascript">

if($("#salesChar2t").html())
  salesChar2t();
 
function salesChar2t()
{
  
'use strict';
//-----------------------
//- MONTHLY ABSENCE CHART -
//-----------------------

// Get context with jQuery - using jQuery's .get() method.
var salesChartCanvas = $("#salesChar2t").get(0).getContext("2d");
// This will get the first returned node in the jQuery collection.
var salesChart = new Chart(salesChartCanvas);
var year=0;

if($("#year").html())
  year=$("#year").html();

$.ajax({
	url:"<?= site_url()?>Admin/getMonthlyRecap/"+year,
	success:function(s)
	{

		//alert(s);
		var label=new Array();
		var data1=new Array();
		var data2=new Array();
		var dataAll=s.split("##");
		
		var dataReturn=dataAll[1].split("||");
		//last year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			label[i]=dt[0];
			data1[i]=dt[1];
		}
		
		
		dataReturn=dataAll[0].split("||");
		
		//current year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			label[i]=dt[0];
			data2[i]=dt[1];
		}
		
		//change label name
		
		
		var dt1=
		  {
			label: "last Year",
			fillColor: "rgb(210, 214, 222)",
			strokeColor: "rgb(210, 214, 222)",
			pointColor: "rgb(210, 214, 222)",
			pointStrokeColor: "#c1c7d1",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgb(220,220,220)",
			data: data1
		  };
		var dt2=
		  {
			label: "Current Year",
			fillColor: "rgba(60,141,188,0.9)",
			strokeColor: "rgba(60,141,188,0.8)",
			pointColor: "#3b8bba",
			pointStrokeColor: "rgba(60,141,188,1)",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(60,141,188,1)",
			data: data2
		  }
		 
		var salesChartData = {
			labels: label,
			datasets: [dt1,dt2]
		};

	  //Create the line chart
	  salesChart.Bar(salesChartData);
	},
	error : function(a,b,c)
	{
		alert(c);
	}
});
}

//---------------------------
//- END MONTHLY SALES CHART -
//---------------------------

</script>

 <script type="text/javascript">

if($("#pieChartJenis"))
  pieChartJenis();

function pieChartJenis()
{
  //alert();
 // alert();

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.

	  //alert();

	$.ajax({
	url:"<?= site_url()?>Dashboardtracking/getJenisKendaraan",
	success:function(s)
	{
		//alert(s);
		var pieValue=new Array();	
		var pieColor = new Array();
		var colorPallette=new Array(
								"#af460f",
								"#fe8761",
								"#fed39f",
								"#d3f4ff",
								"#52de97",
								"#c9b6e4",
								"#ede59a",
								"#bbded6",
								"#ff6464",
								"#916dd5",
								"#2c786c"
								);
		var pieLabel=new Array();
		
		var dataAll=s.split("||");
	
		
		
		for(var i=0;i<dataAll.length;i++)
		{
			
			var dt=dataAll[i].split("++");
			pieLabel[i]=dt[0];
			pieValue[i]=dt[1];
			pieColor[i]=colorPallette[i];
		}
		
		
	var pieOptions = {
	legend: {
		display:false
	},tooltips: {
		display:true
	},
	plugins:{
	  labels: [
	  {
		render: 'percentage',
		fontColor: "black",
		precision: 1
	  },
	  {
		render: 'label',
		fontColor: "black",
		position: 'outside',
	outsidePadding: 10
	  }
	  ]
	}
	};

	var pie = document.getElementById('pieChartJenis').getContext('2d');
	var myChart = new Chart(pie, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: pieValue,
			backgroundColor: pieColor,
			
			}],
			labels: pieLabel
		},
		options: pieOptions
	});
	/*
	  
	$("#pieChart").click( 
		function(evt){
			var activePoints = myChart.getElementsAtEvent(evt)[0];
			var leaveType = activePoints._view.label;
			var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
			location.href=url;
			//console.log(activePoints._view.label);
		}
	); 
		*/
		
	},
	error: function(xhr, status, error) {
	//var err = eval("(" + xhr.responseText + ")");
	console.log(xhr.responseText);
	}
	});
}
//-----------------
//- END PIE CHART -
//-----------------

</script>

<script type="text/javascript">

	if($("#pieChartBarangkeluar"))
	pieChartBarangkeluar();

	function pieChartBarangkeluar()
	{
	//alert();
	// alert();

	//-------------
	//- PIE CHART BARANG KELUAR -
	//-------------
	// Get context with jQuery - using jQuery's .get() method.

		//alert();

	$.ajax({
	url:"<?= site_url()?>DashboardBarang/getBarangkeluar",
	success:function(s)
	{
		//alert(s);
		var pieValue=new Array();	
		var pieColor = new Array();
		var colorPallette=new Array(
								"#af460f",
								"#fe8761",
								"#fed39f",
								"#d3f4ff",
								"#52de97",
								"#c9b6e4",
								"#ede59a",
								"#bbded6",
								"#ff6464",
								"#916dd5",
								"#2c786c"
								);
		var pieLabel=new Array();
		
		var dataAll=s.split("||");
	
		
		
		for(var i=0;i<dataAll.length;i++)
		{
			
			var dt=dataAll[i].split("++");
			pieLabel[i]=dt[0];
			pieValue[i]=dt[1];
			pieColor[i]=colorPallette[i];
		}
		
		
	var pieOptions = {
	legend: {
		display:false
	},tooltips: {
		display:true
	},
	plugins:{
		labels: [
		{
		render: 'percentage',
		fontColor: "black",
		precision: 1
		},
		{
		render: 'label',
		fontColor: "black",
		position: 'outside',
	outsidePadding: 10
		}
		]
	}
	};

	var pie = document.getElementById('pieChartBarangkeluar').getContext('2d');
	var myChart = new Chart(pie, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: pieValue,
			backgroundColor: pieColor,
			
			}],
			labels: pieLabel
		},
		options: pieOptions
	});
	/*
		
	$("#pieChart").click( 
		function(evt){
			var activePoints = myChart.getElementsAtEvent(evt)[0];
			var leaveType = activePoints._view.label;
			var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
			location.href=url;
			//console.log(activePoints._view.label);
		}
	); 
		*/
		
	},
	error: function(xhr, status, error) {
	//var err = eval("(" + xhr.responseText + ")");
	console.log(xhr.responseText);
	}
	});
	}
	//-----------------
	//- END PIE CHART BARANG KELUAR-
	//-----------------

	</script>

<script type="text/javascript">

if($("#pieChartMasuk"))
pieChartMasuk();

function pieChartMasuk()
{
//alert();
// alert();

//-------------
//- PIE CHART BARANG MASUK -
//-------------
// Get context with jQuery - using jQuery's .get() method.

	//alert();

  $.ajax({
  url:"<?= site_url()?>DashboardBarang/getBarangmasuk",
  success:function(s)
  {
	  //alert(s);
	  var pieValue=new Array();	
	  var pieColor = new Array();
	  var colorPallette=new Array(
							  "#af460f",
							  "#fe8761",
							  "#fed39f",
							  "#d3f4ff",
							  "#52de97",
							  "#c9b6e4",
							  "#ede59a",
							  "#bbded6",
							  "#ff6464",
							  "#916dd5",
							  "#2c786c"
							  );
	  var pieLabel=new Array();
	  
	  var dataAll=s.split("||");
  
	  
	  
	  for(var i=0;i<dataAll.length;i++)
	  {
		  
		  var dt=dataAll[i].split("++");
		  pieLabel[i]=dt[0];
		  pieValue[i]=dt[1];
		  pieColor[i]=colorPallette[i];
	  }
	  
	  
  var pieOptions = {
  legend: {
	  display:false
  },tooltips: {
	  display:true
  },
  plugins:{
	labels: [
	{
	  render: 'percentage',
	  fontColor: "black",
	  precision: 1
	},
	{
	  render: 'label',
	  fontColor: "black",
	  position: 'outside',
  outsidePadding: 10
	}
	]
  }
  };

  var pie = document.getElementById('pieChartMasuk').getContext('2d');
  var myChart = new Chart(pie, {
	  type: 'doughnut',
	  data: {
		  datasets: [{
			  data: pieValue,
		  backgroundColor: pieColor,
		  
		  }],
		  labels: pieLabel
	  },
	  options: pieOptions
  });
  /*
	
  $("#pieChart").click( 
	  function(evt){
		  var activePoints = myChart.getElementsAtEvent(evt)[0];
		  var leaveType = activePoints._view.label;
		  var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
		  location.href=url;
		  //console.log(activePoints._view.label);
	  }
  ); 
	  */
	  
  },
  error: function(xhr, status, error) {
  //var err = eval("(" + xhr.responseText + ")");
  console.log(xhr.responseText);
  }
  });
}
//-----------------
//- END PIE CHART BARANG MASUK -
//-----------------

</script>

<script type="text/javascript">

  	if($("#pieChartAllproduct"))
	  pieChartAllproduct();
  
  	function pieChartAllproduct()
  {
	  //alert();
	 // alert();
	
	//-------------
	//- PIE CHART ALL PRODUCTS -
	//-------------
	// Get context with jQuery - using jQuery's .get() method.
	
  		//alert();

		$.ajax({
		url:"<?= site_url()?>DashboardBarang/getAllproduct",
		success:function(s)
		{
			//alert(s);
			var pieValue=new Array();	
			var pieColor = new Array();
			var colorPallette=new Array(
									"#af460f",
									"#fe8761",
									"#fed39f",
									"#d3f4ff",
									"#52de97",
									"#c9b6e4",
									"#ede59a",
									"#bbded6",
									"#ff6464",
									"#916dd5",
									"#2c786c",
									'#808080',
									"#af460f",
									"#fe8761",
									"#fed39f",
									"#d3f4ff",
									"#52de97",
									"#c9b6e4",
									"#ede59a",
									"#bbded6",
									"#ff6464",
									"#916dd5",
									"#2c786c",
									'#808080',
									"#af460f",
									"#fe8761",
									"#fed39f",
									"#d3f4ff",
									"#52de97",
									"#c9b6e4",
									"#ede59a",
									"#bbded6",
									"#ff6464",
									"#916dd5",
									"#2c786c",
									'#808080',
									"#af460f",
									"#fe8761",
									"#fed39f",
									"#d3f4ff",
									"#52de97",
									"#c9b6e4",
									"#ede59a",
									"#bbded6",
									"#ff6464",
									"#916dd5",
									"#2c786c",
									'#808080',
									"#af460f",
									"#fe8761",
									"#fed39f",
									"#d3f4ff",
									"#52de97",
									"#c9b6e4",
									"#ede59a",
									"#bbded6",
									"#ff6464",
									"#916dd5",
									"#2c786c",
									'#808080',
									);
			var pieLabel=new Array();
			
			var dataAll=s.split("||");
		
			
			
			for(var i=0;i<dataAll.length;i++)
			{
				
				var dt=dataAll[i].split("++");
				pieLabel[i]=dt[0];
				pieValue[i]=dt[1];
				pieColor[i]=colorPallette[i];
			}
			
			
		var pieOptions = {
		legend: {
			display:false
		},tooltips: {
			display:true
		},
		plugins:{
		  labels: [
		  {
			render: 'percentage',
			fontColor: "black",
			precision: 1
		  },
		  {
			render: 'label',
			fontColor: "black",
			position: 'outside',
        outsidePadding: 10
		  }
		  ]
		}
		};

		var pie = document.getElementById('pieChartAllproduct').getContext('2d');
		var myChart = new Chart(pie, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: pieValue,
				backgroundColor: pieColor,
				
				}],
				labels: pieLabel
			},
			options: pieOptions
		});
		/*
		  
		$("#pieChart").click( 
			function(evt){
				var activePoints = myChart.getElementsAtEvent(evt)[0];
				var leaveType = activePoints._view.label;
				var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
				location.href=url;
				//console.log(activePoints._view.label);
			}
		); 
			*/
			
		},
		error: function(xhr, status, error) {
		//var err = eval("(" + xhr.responseText + ")");
		console.log(xhr.responseText);
		}
		});
	}
  //-----------------
  //- END PIE CHART ALL PRODUCTS -
  //-----------------

    </script>

<script type="text/javascript">
		//alert("as");
		if( $("#barChartATK") )
		salesChar2t();
		
		function salesChar2t()
		{
		//alert("asd");
		'use strict';
		//-----------------------
		//- MONTHLY ABSENCE CHART -
		//-----------------------

		// Get context with jQuery - using jQuery's .get() method.
		//var salesChartCanvas = $("#barChart").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		//var salesChart = new Chart(salesChartCanvas);

		$.ajax({
			url:"<?= site_url()?>DashboardBarang/getJumlahperBulan",
			success:function(s)
			{

				//alert(s);
				var label=new Array();
				var data1=new Array();
				//var dataAll=s.split("##");
				
				var dataReturn=s.split("||");
				//last year
				for(var i=0;i<dataReturn.length;i++)
				{
					
					var dt=dataReturn[i].split("++");
					label[i]=dt[0];
					data1[i]=dt[1];
				}
				
				//alert(data1);
				//change label name
				var ctx = document.getElementById('barChartATK').getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: label,
						datasets: [{
							label: 'Jumlah',
							data: data1,
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
								
								
							],
							borderColor: [
								'rgba(255, 99, 132, 1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
				
			},
			error : function(a,b,c)
			{
				alert(c);
			}
		});
		}

		//---------------------------
		//- END MONTHLY SALES CHART Barang-
		//---------------------------

		</script>
	

		<script type="text/javascript">
		//alert("as");
		if( $("#barChart") )
		salesChar2t();
		
		function salesChar2t()
		{
		//alert("asd");
		'use strict';
		//-----------------------
		//- MONTHLY ABSENCE CHART -
		//-----------------------

		// Get context with jQuery - using jQuery's .get() method.
		//var salesChartCanvas = $("#barChart").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		//var salesChart = new Chart(salesChartCanvas);

		$.ajax({
			url:"<?= site_url()?>DashboardBarang/getJumlahperBulan",
			success:function(s)
			{

				//alert(s);
				var label=new Array();
				var data1=new Array();
				//var dataAll=s.split("##");
				
				var dataReturn=s.split("||");
				//last year
				for(var i=0;i<dataReturn.length;i++)
				{
					
					var dt=dataReturn[i].split("++");
					label[i]=dt[0];
					data1[i]=dt[1];
				}
				
				//alert(data1);
				//change label name
				var ctx = document.getElementById('barChart').getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: label,
						datasets: [{
							label: 'Jumlah',
							data: data1,
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
								
								
							],
							borderColor: [
								'rgba(255, 99, 132, 1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
				
			},
			error : function(a,b,c)
			{
				alert(c);
			}
		});
		}

		//---------------------------
		//- END MONTHLY SALES CHART Barang-
		//---------------------------

		</script>

<script type="text/javascript">
$(".btn-vac-approve").on("click",function(e){
	e.preventDefault();
	var lnk = $(this).data("lnk");
	var idData = $(this).data("id");
	var picData = $(this).data("pic");
	var msgData = window.prompt("Additional Notes");
	//alert(lnk+idData+picData);
	
	$.ajax({
		url : "<?= site_url();?>"+lnk,
		method : "post",
		data : { 'id' : idData, 'pic' : picData, 'msg' : msgData},
		success : function(s)
		{
			//alert(s);
			alert("Success");
			location.reload();
		}
	});
	
})


$(".btn-vac-reject").on("click",function(e){
	e.preventDefault();
	var lnk = $(this).data("lnk");
	var idData = $(this).data("id");
	var picData = $(this).data("pic");
	var msgData = window.prompt("Reason");
	//alert(lnk+idData+picData);
	
	$.ajax({
		url : "<?= site_url();?>"+lnk,
		method : "post",
		data : { 'id' : idData, 'pic' : picData, 'msg' : msgData},
		success : function(s)
		{
			//alert(s);
			alert("Success");
			location.reload();
		}
	});
	
})
</script>

<!-- maintenance add item -->
<script type="text/javascript">
$("#txtItemBatch").on("blur",function(){
	var itemBatch = $(this).val();
	if(itemBatch != "")
	{
	$.ajax({
		url : "<?= site_url();?>Maintenance/getItemDetail/",
		method :"post",
		data : {"itemBatch" : itemBatch},
		success : function(s)
		{
			//alert(s);
			if(s != "0")
			{
				var dt = s.split("~");
				$("#txtItemDesc").val(dt[0]);
				$("#txtItemSN").val(dt[1]);
				//$("#txtItemPic").val(dt[1]);
				$("#txtItemPic").attr("src","<?= base_url();?>assets/admin/img/item/"+dt[2])
			}
		}
	});
	}
})

$("#btn-save-mtitem").on("click",function(){
	//alert();
	var res = window.confirm("Add new item?");
	//alert(res);
	if (res == true)
	{
		$("#form-mt-item").submit();
	}
		
});

$("#form-mt-item").on("submit",function(e){
	var saveData = $(this).serialize();
	//alert(saveData);
	e.preventDefault();
	$.ajax({
		url : "<?= site_url();?>Maintenance/saveItem",
		method:"post",
		data : saveData,
		success : function(s)
		{
			
			//alert(s);
			location.reload();
		}
		
	});
});


/*
$("#btn-save-mtact").on("click",function(){
	//alert();
	var res = window.confirm("Add new Activity?");
	//alert(res);
	if (res == true)
	{
		$("#form-mt-act").submit();
	}
		
});
*/

$("#form-mt-act").on("submit",function(e){
	//var saveData = $(this).serialize();
	
	var saveData = new FormData(this);
	//console.log(saveData);
	e.preventDefault();
	
	$.ajax({
		url : "<?= site_url();?>Maintenance/saveAct",
		method:"post",
		data : saveData,
		processData: false,
		contentType: false,
		success : function(s)
		{
			
			//alert(s);
			location.reload();
		}
		
	});
	
});

$(".btn-mt").on("click",function(e){
	e.preventDefault();
	//alert();
	var id = $(this).data('id');
	var lnk = $(this).data('lnk');
	$.ajax({
		url : "<?= site_url();?>Maintenance/"+lnk,
		method : "post",
		data : {"id" : id},
		success : function(s)
		{
			//alert(s);
			alert("Success");
			location.reload();
		}
	})
})

</script>


 <script type="text/javascript">
 if($("#signature-pad"))
 {
	//alert();
	
	var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
	  backgroundColor: 'rgba(255, 255, 255, 0)',
	  penColor: 'rgb(0, 0, 0)',
	  onEnd: function()
	  {
		  
		var imgData = signaturePad.toDataURL();
		//alert(imgData);
		$("#txtsignpad").val(imgData);
		 //alert();
	  }
	});
	
	signaturepad.onEnd(function(){
		//alert();
	});
	
	function clearSignpad()
	{
		signaturePad.clear();
		$("#txtsignpad").val("");
	}
	 
 }

		 
</script>

<script type ="text/javascript">
	$("#txtJumlahKeluar").on("blur", function(e){
		var id = $("#cboBarang").val();
		
		$.ajax({
			url : "<?= site_url();?>/Barangkeluar/ambilstok/" + id,
			success : function(s)
			{
				var jml = $("#txtJumlahKeluar").val();
				if(parseInt(s) < parseInt(jml) )
				alert("stok tidak mencukupi");
			}
		});
		//alert(id);

	});

</script>
<script type="text/javascript">

if($("#pieChartJenisKelamin"))
  pieChartJenisKelamin();

function pieChartJenisKelamin()
{
  //alert();
 // alert();

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.

	  //alert();

	$.ajax({
	url:"<?= site_url()?>HomePelamar/getJenisKelamin",
	success:function(s)
	{
		//alert(s);
		var pieValue=new Array();	
		var pieColor = new Array();
		var colorPallette=new Array(
								"#af460f",
								"#fe8761",
								"#fed39f",
								"#d3f4ff",
								"#52de97",
								"#c9b6e4",
								"#ede59a",
								"#bbded6",
								"#ff6464",
								"#916dd5",
								"#2c786c"
								);
		var pieLabel=new Array();
		
		var dataAll=s.split("||");
	
		
		
		for(var i=0;i<dataAll.length;i++)
		{
			
			var dt=dataAll[i].split("++");
			pieLabel[i]=dt[0];
			pieValue[i]=dt[1];
			pieColor[i]=colorPallette[i];
		}
		
		
	var pieOptions = {
	legend: {
		display:false
	},tooltips: {
		display:true
	},
	plugins:{
	  labels: [
	  {
		render: 'percentage',
		fontColor: "black",
		precision: 1
	  },
	  {
		render: 'label',
		fontColor: "black",
		position: 'outside',
	outsidePadding: 10
	  }
	  ]
	}
	};

	var pie = document.getElementById('pieChartJenisKelamin').getContext('2d');
	var myChart = new Chart(pie, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: pieValue,
			backgroundColor: pieColor,
			
			}],
			labels: pieLabel
		},
		options: pieOptions
	});
	/*
	  
	$("#pieChart").click( 
		function(evt){
			var activePoints = myChart.getElementsAtEvent(evt)[0];
			var leaveType = activePoints._view.label;
			var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
			location.href=url;
			//console.log(activePoints._view.label);
		}
	); 
		*/
		
	},
	error: function(xhr, status, error) {
	//var err = eval("(" + xhr.responseText + ")");
	console.log(xhr.responseText);
	}
	});
}
//-----------------
//- END PIE CHART -
//-----------------

</script>

<script type="text/javascript">

if($("#pieChartLulusan"))
  pieChartLulusan();

function pieChartLulusan()
{
  //alert();
 // alert();

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.

	  //alert();

	$.ajax({
	url:"<?= site_url()?>HomePelamar/getLulusan",
	success:function(s)
	{
		//alert(s);
		var pieValue=new Array();	
		var pieColor = new Array();
		var colorPallette=new Array(
								"#af460f",
								"#fe8761",
								"#fed39f",
								"#d3f4ff",
								"#52de97",
								"#c9b6e4",
								"#ede59a",
								"#bbded6",
								"#ff6464",
								"#916dd5",
								"#2c786c"
								);
		var pieLabel=new Array();
		
		var dataAll=s.split("||");
	
		
		
		for(var i=0;i<dataAll.length;i++)
		{
			
			var dt=dataAll[i].split("++");
			pieLabel[i]=dt[0];
			pieValue[i]=dt[1];
			pieColor[i]=colorPallette[i];
		}
		
		
	var pieOptions = {
	legend: {
		display:false
	},tooltips: {
		display:true
	},
	plugins:{
	  labels: [
	  {
		render: 'percentage',
		fontColor: "black",
		precision: 1
	  },
	  {
		render: 'label',
		fontColor: "black",
		position: 'outside',
	outsidePadding: 10
	  }
	  ]
	}
	};

	var pie = document.getElementById('pieChartLulusan').getContext('2d');
	var myChart = new Chart(pie, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: pieValue,
			backgroundColor: pieColor,
			
			}],
			labels: pieLabel
		},
		options: pieOptions
	});
	/*
	  
	$("#pieChart").click( 
		function(evt){
			var activePoints = myChart.getElementsAtEvent(evt)[0];
			var leaveType = activePoints._view.label;
			var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
			location.href=url;
			//console.log(activePoints._view.label);
		}
	); 
		*/
		
	},
	error: function(xhr, status, error) {
	//var err = eval("(" + xhr.responseText + ")");
	console.log(xhr.responseText);
	}
	});
}
//-----------------
//- END PIE CHART -
//-----------------

</script>

<script type="text/javascript">

if($("#pieChartLulusan"))
  pieChartLulusan();

function pieChartLulusan()
{
  //alert();
 // alert();

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.

	  //alert();

	$.ajax({
	url:"<?= site_url()?>HomePelamar/getLulusan",
	success:function(s)
	{
		//alert(s);
		var pieValue=new Array();	
		var pieColor = new Array();
		var colorPallette=new Array(
								"#af460f",
								"#fe8761",
								"#fed39f",
								"#d3f4ff",
								"#52de97",
								"#c9b6e4",
								"#ede59a",
								"#bbded6",
								"#ff6464",
								"#916dd5",
								"#2c786c"
								);
		var pieLabel=new Array();
		
		var dataAll=s.split("||");
	
		
		
		for(var i=0;i<dataAll.length;i++)
		{
			
			var dt=dataAll[i].split("++");
			pieLabel[i]=dt[0];
			pieValue[i]=dt[1];
			pieColor[i]=colorPallette[i];
		}
		
		
	var pieOptions = {
	legend: {
		display:false
	},tooltips: {
		display:true
	},
	plugins:{
	  labels: [
	  {
		render: 'percentage',
		fontColor: "black",
		precision: 1
	  },
	  {
		render: 'label',
		fontColor: "black",
		position: 'outside',
	outsidePadding: 10
	  }
	  ]
	}
	};

	var pie = document.getElementById('pieChartLulusan').getContext('2d');
	var myChart = new Chart(pie, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: pieValue,
			backgroundColor: pieColor,
			
			}],
			labels: pieLabel
		},
		options: pieOptions
	});
	/*
	  
	$("#pieChart").click( 
		function(evt){
			var activePoints = myChart.getElementsAtEvent(evt)[0];
			var leaveType = activePoints._view.label;
			var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
			location.href=url;
			//console.log(activePoints._view.label);
		}
	); 
		*/
		
	},
	error: function(xhr, status, error) {
	//var err = eval("(" + xhr.responseText + ")");
	console.log(xhr.responseText);
	}
	});
}
//-----------------
//- END PIE CHART -
//-----------------

</script>

<script type="text/javascript">

if($("#pieChartKota"))
  pieChartKota();

function pieChartKota()
{
  //alert();
 // alert();

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.

	  //alert();

	$.ajax({
	url:"<?= site_url()?>HomePelamar/getKota",
	success:function(s)
	{
		//alert(s);
		var pieValue=new Array();	
		var pieColor = new Array();
		var colorPallette=new Array(
								"#af460f",
								"#fe8761",
								"#fed39f",
								"#d3f4ff",
								"#52de97",
								"#c9b6e4",
								"#ede59a",
								"#bbded6",
								"#ff6464",
								"#916dd5",
								"#2c786c"
								);
		var pieLabel=new Array();
		
		var dataAll=s.split("||");
	
		
		
		for(var i=0;i<dataAll.length;i++)
		{
			
			var dt=dataAll[i].split("++");
			pieLabel[i]=dt[0];
			pieValue[i]=dt[1];
			pieColor[i]=colorPallette[i];
		}
		
		
	var pieOptions = {
	legend: {
		display:false
	},tooltips: {
		display:true
	},
	plugins:{
	  labels: [
	  {
		render: 'percentage',
		fontColor: "black",
		precision: 1
	  },
	  {
		render: 'label',
		fontColor: "black",
		position: 'outside',
	outsidePadding: 10
	  }
	  ]
	}
	};

	var pie = document.getElementById('pieChartKota').getContext('2d');
	var myChart = new Chart(pie, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: pieValue,
			backgroundColor: pieColor,
			
			}],
			labels: pieLabel
		},
		options: pieOptions
	});
	/*
	  
	$("#pieChart").click( 
		function(evt){
			var activePoints = myChart.getElementsAtEvent(evt)[0];
			var leaveType = activePoints._view.label;
			var url = "<?= site_url();?>Vacation?type=" + leaveType.replace(/ /g,"_")+"&year="+year;
			location.href=url;
			//console.log(activePoints._view.label);
		}
	); 
		*/
		
	},
	error: function(xhr, status, error) {
	//var err = eval("(" + xhr.responseText + ")");
	console.log(xhr.responseText);
	}
	});
}
//-----------------
//- END PIE CHART -
//-----------------

</script>

<script type="text/javascript">
//alert("as");
if( $("#barChartPelamar") )
  salesChar2t();
 
function salesChar2t()
{
  //alert("asd");
'use strict';
//-----------------------
//- MONTHLY ABSENCE CHART -
//-----------------------

// Get context with jQuery - using jQuery's .get() method.
//var salesChartCanvas = $("#barChart").get(0).getContext("2d");
// This will get the first returned node in the jQuery collection.
//var salesChart = new Chart(salesChartCanvas);

$.ajax({
	url:"<?= site_url()?>HomePelamar/getJumlahperBulan",
	success:function(s)
	{

		//alert(s);
		var label=new Array();
		var data1=new Array();
		//var dataAll=s.split("##");
		
		var dataReturn=s.split("||");
		//last year
		for(var i=0;i<dataReturn.length;i++)
		{
			
			var dt=dataReturn[i].split("++");
			label[i]=dt[0];
			data1[i]=dt[1];
		}
		
		//alert(data1);
		//change label name
		var ctx = document.getElementById('barChartpelamar').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: label,
				datasets: [{
					label: 'Jumlah',
					data: data1,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 159, 64, 0.2)'
						
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
		
	},
	error : function(a,b,c)
	{
		alert(c);
	}
});
}

//---------------------------
//- END MONTHLY SALES CHART -
//---------------------------

</script>

<script type="text/javascript">
//var coba = $("#txtTglLahirPelamar").val();

//$("#txtUmurPelamar").val(coba);

//skrip saat blur
$("#txtUmurPelamar").on("focus",function(){
	var tanggal = $("#txtTglLahirPelamar").val();
	var tahun = tanggal.substr(0,4);
	var tglSekarang = new Date();
	var tahunSekarang = tglSekarang.getFullYear();

	var umur = tahunSekarang - tahun;
	//skrip saat blur
	$("#txtUmurPelamar").val(umur);

});

</script>
<script type="text/javascript">
		$(document).ready(function () {
		$('#dtHorizontalVerticalExample').DataTable({
		"scrollX": true,
		"scrollY": 300,
		});

		//$('.dataTables_length').addClass('bs-select');
		});
</script>

</body>
</html>
