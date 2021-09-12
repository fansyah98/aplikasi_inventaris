<section class="content-header">
    <h1>
        Master data Armada
    </h1>
    <ol class="breadcrumb">
        <a href="<?= site_url('armada/add') ?> " class="btn btn-success btn-xs"><i class="fa fa-plus"> Tambah data armada </i></a>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->load->view('message'); ?>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Master data Armada</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped table-responsive" id="table1">
                <thead>
                    <tr>
                        <th style="width: 50px;">no</th>
                        <th>nama mobil</th>
                        <th>nomor plat</th>
                        <th>tahun </th>
                        <th>jenis </th>
                        <th>no mesin </th>
                        <th>action </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($armada->result() as $key => $value) { ?>
                            <td><?= $no++ ?></td>
                            <td><?= $value->nama_mobil ?></td>
                            <td><?= $value->no_plat ?></td>
                            <td><?= $value->tahun ?></td>
                            <td><?= $value->jenis_mobil ?></td>
                            <td><?= $value->no_mesin ?></td>
                            <td>
                                <a href="<?= site_url('armada/edit/' . $value->id_armada) ?>" class="btn btn-info btn-xs"><i class=" fa fa-pencil"></i></a>
                                <a href="<?= site_url('armada/del/' . $value->id_armada) ?>" class="btn btn-primary btn-xs" onclick="return confirm('apakah yakin hapus data !!')"><i class="fa fa-trash"></i></a>
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