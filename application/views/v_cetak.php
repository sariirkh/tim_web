
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
      <td width="85%"><div align="center" class="style1"><strong>KEMENTERIAN KETENAGAKERJAAN<br>
	  PT. MANGLI DJAYA RAYA</strong><br>
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
          <td colspan="2"><div align="center" class="style1"><strong>BIODATA PELAMAR </strong></div></td>
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
<?php foreach($pelamar as $a) { ?>

<p><font size="+1"><b>Data Pelamar<br>PT. Mangli Djaya Raya</b></font></p>
								<table border="1" cellpadding="10" cellspacing="0	">
							<tbody><tr>
							<td width="5%" height="4%" align="center" rowspan="750" ><img src="<?= base_url('assets/foto/'.$a->Foto_pelamar) ?>" width="210" height="270"></td>
							
						    	</tr>
                   <tr>
                  <td>Nama</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->nama_pelamar ?></td>
                  </tr>
                  <tr>
                  <td>Tanggal Lahir</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->tgllahir_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Umur</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->umur_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Jenis Kelamin</td>
                  <td>: </td>
                  <td><?= $a->jk_pelamar?></td>
                  </tr>
                  <tr>
                  <td valign="top">Alamat</td>
                  <td valign="top">:&nbsp;&nbsp;</td>
                  <td><?= $a->alamat_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Kota</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->kota_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Agama</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->agama_pelamar?></td>
                  </tr>
                  <tr>
                  <td>No.Hp</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->nohp_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Status</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->status_pelamar?></td>
                  </tr>
                  <td>Pendidikan Terakhir</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->pdkterakhir_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Jurusan</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td>: <?= $a->jurusan_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Nilai</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->nilai_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Asal Sekolah </td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->asalsekolah_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Prestasi </td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->prestasi_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Keahlian</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->keahlian_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Pengalaman Kerja</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->pengalamankerja_pelamar?></td>
                  </tr>
                  <tr>
                  <td>Loker</td>
                  <td>:&nbsp;&nbsp;</td>
                  <td><?= $a->loker_pelamar?></td>
                  </tr>
                  </tr>

							<!--<tr>
							<td>Kode Transaksi Bank</td>
							<td>:&nbsp;&nbsp;</td>
							<td>401014857757781</td>
							</tr>-->
				


<?php } ?>

<script>
        window.print();
    </script>
</body>
</html>