<section class="content-header">
    <h1>
        <?= $page ?> data peminjam
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('peminjam') ?>" class="btn btn-success btn-xs"><i class="fa fa-undo"></i> Kembali data peminjam</a></li>

    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $page ?> data peminjam </h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">
                    <form action="<?= site_url('peminjam/prosess') ?>" method="POST">
                        <div class="form-group">
                            <label> Pilih armada* </label>
                            <input type="hidden" name="id" value="<?= $row->id_pinjam ?>">
                            <?php echo form_dropdown('armada', $armada, $selectedarmada, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label> Harga sewa * </label>
                            <?php echo form_dropdown('sewa', $sewa, $selectedsewa, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label> Nomor NIK/KTP * </label>
                            <input type="text" name="nik" class="form-control" value="<?= $row->nik ?>">
                        </div>
                        <div class="form-group">
                            <label> Nama Peminjam * </label>
                            <input type="text" name="nama_peminjam" class="form-control" value="<?= $row->nama_peminjam ?> ">
                        </div>
                        <div class="form-group">
                            <label> Alamat * </label>
                            <input type="text" name="alamat" class="form-control " value="<?= $row->alamat ?>">
                        </div>
                        <div class="form-group">
                            <label> tgl_pinjem * </label>
                            <input type="text" name="tgl_pinjem" class="form-control date" value="<?= $row->tgl_pinjem ?> ">
                        </div>
                        <div class="form-group">
                            <label> tgl_kembali * </label>
                            <input type="text" name="tgl_kembali" class="form-control date" value="<?= $row->tgl_kembali ?>">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-warning btn-xs"> simpan data <i class=" fa fa-save"></i> </button>
                            <button type="reset" class="btn btn-danger btn-xs "> <i class="fa fa-undo"></i> reset data </button>
                        </div>
                    </form>
                </div>
            </div>
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