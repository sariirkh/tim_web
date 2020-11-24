<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/css') ?>

    <style type="text/css">
        .table th {
           text-align: center;   
        }
    </style>
</head>

<body>
    
    <div class="container mt-5">
        <div class="font-weight-bold mb-4 h5"><center>LAPORAN KEUANGAN</center></div>

        <div class="mb-2">
            Tanggal : <span class="font-weight-bold">

            <?php

            if (!empty($tanggalawal) OR !empty($tanggalakhir)) {
                if ($tanggalawal == $tanggalakhir) {
                    echo $controller->tgl_indo($tanggalawal);
                }else{
                    if (!empty($tanggalawal)) {
                        echo $controller->tgl_indo($tanggalawal);
                    }elseif (empty($tanggalawal)) {
                        echo "~";
                    }
                    
                    echo '</span> s/d <span class="font-weight-bold">';

                    if (!empty($tanggalakhir)) {
                        echo $controller->tgl_indo($tanggalakhir);
                    }elseif (empty($tanggalakhir)) {
                        echo "~";
                    }
                }
            }elseif (empty($tanggalawal) AND empty($tanggalakhir)) {
                echo "~";
            }
            
            ?>

            </span>
            
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Transaksi</th>
                    <th>Tanggal</th>
                    <th>Nama Transaksi</th>
                    <th>Dana Masuk</th>
                    <th>Dana Keluar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($transaksi)) {
                ?>
                <tr>
                    <td colspan="6" class="font-weight-bold" align="center">TIDAK ADA DATA TRANSAKSI</td>
                </tr>
                <?php
                }
                ?>

                <?php
                $no = 1;
                foreach ($transaksi as $t) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                        <?php
                        if ($t->status == 1) {
                            echo "Pembayaran";
                        }elseif ($t->status == 2) {
                            echo "Pengeluaran";
                        }
                        ?>
                    </td>
                    <td><?php echo $controller->tgl_indo($t->pembayaran_tanggalbayar) ?></td>
                    <td>
                        <?php
                        if ($t->status == 1) {
                            echo $t->pesertadidik_nama;
                        }elseif ($t->status == 2) {
                            echo $t->kategoripengeluaran_nama;
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($t->status == 1) {
                            echo 'Rp. <span class="nominal">'.$t->pembayaran_nominalbayar.'</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($t->status == 2) {
                            echo 'Rp. <span class="nominal">'.$t->pengeluaran_nominal.'</span>';
                        }
                        ?>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td class="border-0 font-weight-bold" colspan="4" style="text-align: right;">Total :</td>
                    <td><?php echo 'Rp. <span class="nominal">'.$danamasuk.'</span>';?></td>
                    <td><?php echo 'Rp. <span class="nominal">'.$danakeluar.'</span>';?></td>
                </tr>

                <tr>
                    <td class="border-0 font-weight-bold" colspan="4" style="text-align: right;">Total Dana Akhir :</td>
                    <td class="font-weight-bold" colspan="2">
                        <?php
                        if ($totaldana < 0) {
                            echo '- Rp. <span class="nominal">'.$totaldana.'</span>';
                        }elseif ($totaldana >= 0) {
                            echo 'Rp. <span class="nominal">'.$totaldana.'</span>';
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <?php $this->load->view('components/js') ?>

    <script type="text/javascript">

        $( document ).ready(function() {
            $('.nominal').mask('000.000.000.000.000', {reverse: true});
        });
        
    </script>
</body>

</html>