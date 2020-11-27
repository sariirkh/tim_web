
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
    
    <div class="font-weight-bold mb-4 h5"><center>PEMASUKAN BARANG ATK</center></div>

        <div class="mb-2">
            Tanggal : <span class="font-weight-bold">

            <?php

            if (!empty($tglawal) OR !empty($tglakhir)) {
                if ($tglawal == $tglakhir) {
                    echo $this->$tglawal;
                }else{
                    if (!empty($tglawal)) {
                        echo $this->$tglawal;
                    }elseif (empty($tglawal)) {
                        echo "~";
                    }
                    
                    echo '</span> s/d <span class="font-weight-bold">';

                    if (!empty($tglakhir)) {
                        echo $this->$tglakhir;
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
        <br>

				<table align="center" border="1" cellpadding="10" cellspacing="0">
                <tbody>
                <thead>
                        <tr>
                        <th>No</th>
                            <th>ID barang</th>
                            <th>Nama barang</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no=1;
                        foreach($barang as $a) { ?>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a->id_barang ?></td>
                        <td><?= $a->nama_barang ?></td>
                        <td><?= $a->masuk ?></td>
                        <td><?= $a->keluar ?></td>
                        <td><?= $a->sisa ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="border-0 font-weight-bold" colspan="5" style="text-align: right;">Total Stok:</td>
                            <td class="font-weight-bold"><?php echo '<span class="nominal">'.$totalbrg.'</span>';?></td>
                        </tr>
                    </tbody>

                  </tr>
                  </tr>
	
<script>
        window.print();
    </script>
</body>
</html>