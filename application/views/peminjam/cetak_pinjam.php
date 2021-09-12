<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">

    <title>Cetak Data Sturk</title>
</head>

<body onload="window.print();">
    <!-- Main content -->
    <section class=" invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-user"></i> <?= $row->nama_peminjam ?>
                    <small class="pull-right">
                        <?php $tanggal = mktime(date('m'), date("d"), date('Y'));
                        echo " $tanggal : " . date("d-m-y", $tanggal) . "</br>" ?>
                    </small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Keterangan
                <address>
                    <strong>Invoice Online</strong><br>
                    <?= $row->tgl_pinjem ?> waktu pinjam<br>
                    <?= $row->tgl_kembali ?> batas peminjaman<br>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Identistas Peminjam
                <address>
                    Nik : <?= $row->nik ?> <br>
                    Nama: <strong><?= $row->nama_peminjam ?></strong><br>
                    Alamat :<?= $row->alamat ?><br>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Layanan Pinjam <br>
                <b>Account:</b> <?= $row->nama_peminjam ?> <br>
                <b>Fasilitas :</b><?= $paket->fasilitas ?> <br>
                <b>Harga :</b><?= indo_rupiah($paket->harga_sewa) ?> <br>
                <b>Jenis Paket :</b><?= $paket->paket_sewa ?>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nik</th>
                            <th>nama peminjam</th>
                            <th>alamat </th>
                            <th>paket sewa</th>
                            <th>nama mobil</th>
                            <th>tahun</th>
                            <th>No Plat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $row->id_pinjam ?></td>
                            <td><?= $row->nik ?></td>
                            <td><?= $row->nama_peminjam ?></td>
                            <td><?= $row->alamat ?></td>
                            <td><?= $row->paket_sewa ?></td>
                            <td><?= $row->nama_mobil ?></td>
                            <td><?= $row->tahun ?></td>
                            <td><?= $row->no_plat ?></td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->

            <!-- /.col -->
            <div class="col-xs-6">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Nama Peminjam:</th>
                            <td><?= $row->nama_peminjam ?></td>
                        </tr>
                        <tr>
                            <th> Waktu pinjam</th>
                            <td><?= $row->tgl_pinjem ?></td>
                        </tr>
                        <tr>
                            <th>Waktu kembali:</th>
                            <td><?= $row->tgl_kembali ?></td>
                        </tr>
                        <tr>
                            <th>Waktu sewa:</th>
                            <td><?= $row->waktu_sewa ?></td>
                        </tr>

                        <tr>
                            <th>harga sewa:</th>
                            <td><?= indo_rupiah($paket->harga_sewa) ?></td>
                        </tr>
                        <tr>
                            <th>total sewa:</th>
                            <td><?= indo_rupiah($paket->harga_sewa) ?></td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="<?= site_url('peminjam/print/' . $row->id_pinjam) ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                <a href="<?= site_url('peminjam') ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>

            </div>
        </div>
    </section>
</body>

<!-- jQuery 2.2.3 -->
<script src="<?= base_url() ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script src="<?= base_url() ?>assets/js/sf.js"></script>

</html>