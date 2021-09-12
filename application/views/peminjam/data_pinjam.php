<section class="content-header">
    <h1>
        Master data pinjam

    </h1>
    <ol class="breadcrumb">
        <a href="<?= site_url('peminjam/add') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus  "></i> tambah data pinjam </a>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->load->view('message'); ?>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"> Master data pinjam</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- <?php echo print_r($row) ?> -->
            <table class="table table bordered table-responsive table-striped" id="table1">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama peminjam</th>
                        <th>nik</th>
                        <th>alamat </th>
                        <th>paket sewa</th>
                        <th>tgl pinjam </th>
                        <th>tgl kembali </th>
                        <th>nama mobil </th>
                        <th>action </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $value) { ?>
                            <td><?= $no++ ?> </td>
                            <td><?= $value->nama_peminjam ?> </td>
                            <td><?= $value->nik  ?> </td>
                            <td><?= $value->alamat ?> </td>
                            <td><?= $value->paket_sewa ?> </td>
                            <td><?= $value->tgl_pinjem ?> </td>
                            <td><?= $value->tgl_kembali ?> </td>
                            <td><?= $value->nama_mobil ?> </td>
                            <td>
                                <a href="<?= site_url('peminjam/edit/' . $value->id_pinjam) ?> " class="btn btn-success btn-xs "><i class=" fa fa-pencil"></i></a>
                                <a href="<?= site_url('peminjam/del/' . $value->id_pinjam) ?> " class="btn btn-warning btn-xs "><i class=" fa fa-trash"></i></a>
                                <a href="<?= site_url('peminjam/print/' . $value->id_pinjam) ?> " class="btn btn-primary btn-xs "><i class=" fa fa-print"></i></a>
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