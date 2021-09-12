<section class="content-header">
    <h1>
        Master data paket

    </h1>
    <ol class="breadcrumb">
        <a href="<?= site_url('paket/add') ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah data paket</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->load->view('message'); ?>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pilihan data paket</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive table-striped" id="table1">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Jenis paket</th>
                        <th>harga Paket</th>
                        <th>fasilitas</th>
                        <th>waktu sewa</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($paket->result() as $key => $value) { ?>
                            <td><?php echo $no++ ?></td>
                            <td><?= $value->paket_sewa ?></td>
                            <td><?= indo_rupiah($value->harga_sewa) ?></td>
                            <td><?= $value->fasilitas ?></td>
                            <td><?= $value->waktu_sewa ?></td>
                            <td>
                                <a href="<?= site_url('paket/edit/' . $value->id_paket) ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="<?= site_url('paket/del/' . $value->id_paket) ?>" onclick="return confirm('Apakah data ingin di hapus !!')" class=" btn btn-warning btn-xs"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->