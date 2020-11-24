
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
                <tbody>
                <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Id barang</th>
                            <th>Nama barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Jam</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Jenis</th>
                            <th>Catatan</th>
                            <th>Bukti terima</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no=1;
                        foreach($barang as $a) { ?>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a->id_barang_masuk  ?></td>
                        <td><?= $a->id_barang ?></td>
                        <td><?= $a->nama_barang ?></td>
                        <td><?= $a->tanggal_masuk  ?></td>
                        <td><?= $a->jam  ?></td>
                        <td><?= $a->jumlah_masuk  ?></td>
                        <td><?= $a->satuan  ?></td>
                        <td><?= $a->jenis  ?></td>
                        <td><?= $a->catatan  ?></td>
                        <td><img src="<?= base_url('assets/img/'.$a->bukti_terima) ?>" width='60' height='70'></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="border-0 font-weight-bold" colspan="6" style="text-align: right;">Total Stok:</td>
                            <td class="font-weight-bold"><?php echo '<span class="nominal">'.$brgmasuk.'</span>';?></td>
                        </tr>
                    </tbody>

                  </tr>
                  </tr>
	
<script>
        window.print();
    </script>
</body>
</html>