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
              <li class="breadcrumb-item active">Dashboard Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $barang; ?></h3>

                <p>Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="Barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $barangmasuk; ?></h3>

                <p>Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
              <a href="Barangmasuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $barangkeluar; ?></h3>

                <p>Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="ion ion-arrow-up-a"></i>
              </div>
              <a href="Barangkeluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><?php echo $karyawan; ?></h3>

                <p>Karyawan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="Karyawan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        
             <!-- PIE CHART PERTAMA -->
              <!-- Small boxes (Stat box) -->
              

          <!-- PIE CHART KEDUA -->
          <!-- Small boxes (Stat box) -->
              <div class="row">
              <div class="col-6">
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Pie Chart - Barang Masuk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChartMasuk" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- PIE CHART KETIGA -->
          <!-- Small boxes (Stat box) -->
              
          <div class="col-6">
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Pie Chart - Barang Keluar</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChartBarangkeluar" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
           

          <!-- SALES CHART -->
            
        
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header border-3">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Barang Keluar - Bar Chart</h3>
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
                  <canvas id="barChart" height="100"></canvas>
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

       <!-- PRODUCT LIST -->
            
       <div class="col-6">
      <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Riwayat Barang Terakhir Ditambah</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Id Barang</th>
                      <th>Nama Barang</th>
                      <th>Id Loker</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no =1;
                  foreach($riwayat as $a){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $a->id_barang?>
                    <td><?php echo $a->nama_barang?></td>
                    <td><?php echo $a->id_loker?></td>
                  </tr>
                      <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
       
      </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


        