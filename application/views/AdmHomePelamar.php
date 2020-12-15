<!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

         <!-- /.content-header -->

          <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
          <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo $totOpen; ?></h3>

                <p>Pelamar Open</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-person-add"></i>
              </div>
              <a href="Pelamar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
          <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $totDiterima; ?></h3>

                <p>Pelamar Diterima</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark-circled"></i>
              </div>
              <a href="Pelamar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
          <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $totGagal; ?></h3>

                <p>Pelamar Gagal</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-cancel"></i>
              </div>
              <a href="Pelamar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->
          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div> -->
              <!-- /.info-box-content -->
            <!-- </div> -->
            <!-- /.info-box -->
          <!-- </div> -->
          <!-- /.col -->
        <!-- </div> -->
        <!-- /.row -->
        <!-- </div> -->
          <!-- /.col-md-6 -->
          <!-- PIE CHART -->
         
           <!-- Small boxes (Stat box) -->
        <div class="col-4">
          <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Gender Diagram</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChartJenisKelamin" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                  </span>
                  </div>
              
             <!-- PIE CHART -->
             <div class="col-4">
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Graduates Diagram</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChartLulusan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
            <!-- /.card -->
            <!-- Small boxes (Stat box) -->
        <div class="col-4">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">City Diagram</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChartKota" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                  
            </span>
                  </div>
              
             <!-- BAR CHART -->
             <!-- Small boxes (Stat box) -->
             <div class="col-12">
          <div class="card card-info">
              <div class="card-header border-3">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Data Pelamar Dalam 1 Tahun</h3>
                <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="barChartpelamar" height="100"></canvas>
                </div>

             <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
            </div>
            <!-- /.card -->

      
            </div><!--/. container-fluid -->
        </section>
        </div>