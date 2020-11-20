  <!-- Start content -->
  <div class="content">
                <div class="container-fluid">

                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="page-title">LAPORAN</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <form action="http://localhost/genius/laporan/cetak" target="_blank" method="post">

                    <table class="table table-striped table-borderless">
                        <tr>
                            <td>Jenis Laporan</td>
                            <td width="30px">:</td>
                            <td>
                                <select class="form-control" name="sort">
                                    <option value="semua">Semua</option>
                                    <option value="pemasukan">Pemasukan</option>
                                    <option value="pengeluaran">Pengeluaran</option>
                                    <option value="siswa">Siswa</option>
                                    <option value="paket">Paket</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Tanggal Awal</td>
                            <td>:</td>
                            <td>
                                <input class="form-control tanggal" type="text" name="tanggalawal">
                            </td>
                        </tr>

                        <tr>
                            <td>Tanggal Akhir</td>
                            <td>:</td>
                            <td>
                                <input class="form-control tanggal" type="text" name="tanggalakhir">
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input class="btn btn-primary" type="submit" value="Cetak">
                            </td>
                        </tr>
                    </table>

                    </form>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
            
            <footer class="footer">@ 2020 Indonesia</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->