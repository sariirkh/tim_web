
<!-- saved from url=(0068)https://sim-online.polije.ac.id/cKHS.php?valTahun=2019&valSemester=1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
  <title></title>
	</head><body><form>
	<table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody><tr> <br><br>
      <td width="15%"><div align="left">
        <h2 align="center"><img src="<?= base_url() ?>assets/admin/img/mdr-logo.png" width="133" height="124"></h2>
      </div></td>
      <td width="85%"><div align="center" class="style1"><strong>PT. MANGLI DJAYA RAYA</strong><br>
    JL.Mayjen. D.I Panjaitan No. 99, Petung, Bangsalsari, Jawa Timur, Indonesia<br>
    PO BOX 164 Telp (0331) 486656  Jember 68154<br>
Website : http://www.ptmdr.co.id Email : info@ptmdr.co.id </div></td>
    </tr>
    <tr> 
      <td colspan="2"></td>
    </tr>
    <tr>
      <td colspan="2"><hr noshade=""></td>
    </tr>
    <tr>
      <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr><br>
          <td colspan="2"><div align="center" class="style1"><strong>LAPORAN </strong></div></td>
        </tr></table>
        <style type="text/css">
        .container {
            border: 0px solid #000;
            width: 1%;
        }
        .margin {
            margin: 0px 80px 0px 0px;
            border: 0px solid #000;
        }
    </style>
    

				<table border="1" cellpadding="10" cellspacing="0">
        <body>
    
    <div>
        <div class="font-weight-bold mb-4 h5"><center>PENGELUARAN BARANG ATK</center></div>

        <div class="mb-2">
            Tanggal : <span class="font-weight-bold">

            <?php

            if (!empty($tglawal) OR !empty($tglakhir)) {
                if ($tglawal == $tglakhir) {
                    echo $controller->tgl_indo($tanggalawal);
                }else{
                    if (!empty($tglawal)) {
                        echo $controller->tgl_indo($tglawal);
                    }elseif (empty($tglawal)) {
                        echo "~";
                    }
                    
                    echo '</span> s/d <span class="font-weight-bold">';

                    if (!empty($tglakhir)) {
                        echo $controller->tgl_indo($tglakhir);
                    }elseif (empty($tglakhir)) {
                        echo "~";
                    }
                }
            }elseif (empty($tglawal) AND empty($tglakhir)) {
                echo "~";
            }
            
            ?>

            </span>
            
        </div>

        <table border="1" cellpadding="10" cellspacing="0">
            <tbody>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>No. Transaksi</th>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Nama Karyawan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                if (empty($barang)) {
                ?>
                <tr>
                    <td colspan="6" class="font-weight-bold" align="center">TIDAK ADA DATA TRANSAKSI</td>
                </tr>
                <?php
                }
                ?>

                <?php
                $no = 1;
                foreach ($barang as $a) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->tanggal_keluar ?></td>
                    <td><?php echo $a->jam?></td>
                    <td><?php echo $a->id_barang_keluar?></td>
                    <td><?php echo $a->id_barang?></td>
                    <td><?php echo $a->nama_barang ?></td>
                    <td><?php echo $a->nama_karyawan?></td>
                    <td><?php echo '<span class="nominal">'.$a->jumlah_keluar.'</span>'?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td class="border-0 font-weight-bold" colspan="7" style="text-align: right;">Total Stok:</td>
                    <td class="font-weight-bold"><?php echo '<span class="nominal">'.$brgmasuk.'</span>';?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">

        $( document ).ready(function() {
            $('.nominal').mask('000.000.000.000.000', {reverse: true});
        });
        
    </script>
</body>



<script>
        window.print();
    </script>
</body>
</html>