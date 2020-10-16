<!DOCTYPE html>
<html>
<head>
<title>PT Mangli Djaya Raya</title>
</head>
<body>
  <?php foreach($pelamar as $a) { ?><br><br>
<h2 align="center"> Data Pelamar<center>PT Mangli Djaya Raya</h2></center>
<br>
<br>
<table width="745"  cellspacing="0" cellpadding="5" align="center">

<td rowspan="14" align="center"><img src="<?= base_url('assets/foto/'.$a->Foto_pelamar) ?>" width="210" height="270">
<br>
</tr>
<tr>
<td>Nama</td>
<td> : <?= $a->nama_pelamar ?></td>

</tr>
<tr>
<td>Tanggal Lahir</td>
<td>: <?= $a->tgllahir_pelamar?></td>
</tr>
<tr>
<td>Umur</td>
<td>: <?= $a->umur_pelamar?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>: <?= $a->jk_pelamar?></td>
</tr>
<tr>
<td>Alamat</td>
<td>: <?= $a->alamat_pelamar?></td>
</tr>
<tr>
<td>Agama</td>
<td>: <?= $a->agama_pelamar?></td>
</tr>
<tr>
<td>No.Hp</td>
<td>: <?= $a->nohp_pelamar?></td>
</tr>
<tr>
<td>Status</td>
<td>: <?= $a->status_pelamar?></td>
</tr>
<td>Pendidikan Terakhir</td>
<td>: <?= $a->pdkterakhir_pelamar?></td>
</tr>
<tr>
<tr>
<td>Jurusan</td>
<td>: <?= $a->jurusan_pelamar?></td>
</tr>
<tr>
<td>Nilai</td>
<td>: <?= $a->nilai_pelamar?></td>
</tr>
<tr>
<td>Asal Sekolah </td>
<td>: <?= $a->asalsekolah_pelamar?></td>
</tr>
<tr><td rowspan="10"></td>
<td>Prestasi </td>
<td>: <?= $a->prestasi_pelamar?></td>
</tr>
<tr>
<td>Keahlian</td>
<td>: <?= $a->keahlian_pelamar?></td>
</tr>
<tr>
<td>Pengalaman Kerja</td>
<td>: <?= $a->pengalamankerja_pelamar?></td>
</tr>
<tr>
<td>Loker</td>
<td>: <?= $a->loker_pelamar?></td>
</tr>
<tr>
</table>
<br><br>

<?php } ?>

<script>
        window.print();
    </script>
</body>
</html>