<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $pageTitle?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url();?>admin">Home</a></li>
              <li class="breadcrumb-item active"><?= $breadcrumbTitle?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
		
          <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data</h3>
              </div>
                
				
					<form  id="formfield" enctype="multipart/form-data" data-toggle="validator" role="form" method="POST" action="<?= site_url();?><?= $saveLink;?>" >
					
                <div class="card-body">
				<div class="col-md-12">
					<?php
					if(!empty($formLabel))
					{
					?>
						<?php
						$i=0;
						foreach($formLabel as $row)
						{
						?> 
						  <div class="form-group " class="col-md-12">
							<label for="inputEmail3" ><?= $row ?></label>
							  <?= $formTxt[$i] ?>
								<div class="help-block with-errors"></div>
						  </div>
						<?php
						$i++;
						}
						?>
						<!-- <div id="googleMap" style="width:100%;height:500px;"></div>
						<input id="searchTextField" type="text" size="50"> -->
						<!-- <script src="<?php //echo base_url();?>assets/landing/plugins/jquery/jquery.min.js"></script>
						<script src="<?php //echo base_url();?>assets/landing/plugins/jquery-ui/jquery-ui.min.js"></script>
						<script>
						function myMap() {
							
						const myLatLng = { lat: -8.203184, lng: 113.571038 };


						var mapProp= {
						center:myLatLng,
						zoom:13,
						};


						var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

						function initialize() {
						var input = document.getElementById('searchTextField');
						new google.maps.places.Autocomplete(input);
						}

						google.maps.event.addDomListener(window, 'load', initialize);

						// Menampilkan informasi pada masing-masing marker yang diklik
						function bindInfoWindow(marker, map, infoWindow, html) {
						google.maps.event.addListener(marker, 'click', function() {
							infoWindow.setContent(html);
							infoWindow.open(map, marker);
						});
						}
						}
						</script>

						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=myMap"></script> -->

						<?php 
					 	//$this->load->view('map/maprequest'); 
					  ?>
					<?php
					}
					?>
						
					  <div class="form-group">
					  
							<button type="submit"  onClick="return confirm('Save data?')" id="btn-save-mtact" class='btn btn-success btn-flat' >
							<i class="fa fa-check"></i>&nbsp;
							SUBMIT</button>
							   <!-- <button  name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit"   class="btn btn-success"  />Submit</button> -->
						
					  </div>
					  
					  
                </div><!-- /.box-body -->
					</form>
					<div class="card-body">
					<div class="col-md-5">
							<?php
								//$this->load->view('map/tesmap');
								?>
							  </div>
					<!-- modal -->
					<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									Confirm Submit
								</div>
								<div class="modal-body">
									Save transaction?

									<!-- We display the details entered by the user here -->
								

								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<a href="#" id="submit" class="btn btn-success success">Submit</a>
								</div>
							</div>
						</div>
					</div>
			
			
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
        </section><!-- /.content -->

		
      </div><!-- /.content-wrapper -->
